# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

lytrag is a browser-based remote desktop tool built on WebRTC. One browser tab
acts as the **host** (shares its screen, receives input), another acts as the
**viewer** (displays the screen, sends pointer/keyboard input). A Node server
does WebSocket **signaling only** — once peers connect, screen media and input
travel directly peer-to-peer and never pass through the server.

## Commands

```bash
npm install          # install dependencies (run once)
npm run dev          # client watch-bundle + server (tsx watch) on :3000
npm run build        # bundle client -> public/dist + compile server -> dist
npm start            # run the compiled server (needs build first)
npm run typecheck    # tsc --noEmit over all of src
npm run lint         # eslint
npm test             # node --test via tsx over src/**/*.test.ts
```

Run a single test by name with the node test runner's filter:

```bash
node --import tsx --test --test-name-pattern="prunes empty sessions" src/server/sessions.test.ts
```

`PORT` overrides the listen port (default `3000`).

## Architecture

Three layers, each with a clear boundary. Understanding the **two transports**
is the key to this codebase:

1. **Signaling transport** — WebSocket, only used to set up a WebRTC connection.
2. **Peer transport** — WebRTC, carries the screen video track *and* a data
   channel of input events. The server never sees this traffic.

### `src/shared/protocol.ts` — the contract

The single source of truth shared by server and both clients. Defines the
signaling messages (`ClientMessage` / `ServerMessage`) and the input-event
format (`InputEvent`) sent over the WebRTC data channel.

Critical constraint: **this file must stay DOM-free.** The server compiles
without the DOM lib, so `SessionDescription` / `IceCandidate` are declared as
plain structural interfaces that mirror the browser's `RTCSessionDescriptionInit`
/ `RTCIceCandidateInit`. Do not import or reference `RTC*` DOM types here — the
clients rely on structural compatibility instead. Both transports' wire formats
live here so changes stay in lockstep across all three consumers.

### `src/server/` — signaling relay

- `sessions.ts` — `SessionRegistry`: pure in-memory map of `sessionId → { host, viewer }`.
  Deliberately free of any network/WebSocket logic so it is unit-testable with
  plain object stand-ins. This is where the "two peers per session, reject
  duplicate roles, prune empties" rules live.
- `index.ts` — Express (serves `public/`) + `ws` server on `/ws`. It is a thin
  shell over `SessionRegistry`: it parses messages, delegates membership to the
  registry, and **relays `signal` messages verbatim** to the opposite peer. It
  never inspects SDP/ICE payloads.

If you add signaling behavior, put testable logic in `sessions.ts` and keep
`index.ts` as glue.

### `src/client/` — host and viewer apps

- `rtc.ts` — shared browser helpers: `connectSignaling()` (opens the WS, sends
  `join`, dispatches server messages, returns a `signal()` sender), the
  `ICE_SERVERS` list, and the `isIceCandidate()` payload narrower.
- `host.ts` — captures the screen via `getDisplayMedia`, **creates** the input
  data channel, and is the **offerer** (creates the SDP offer once a viewer
  joins). Receives input events and renders them as a remote-cursor overlay.
- `viewer.ts` — **answerer**: receives the offer, attaches the incoming track to
  a `<video>`, picks up the data channel via `ondatachannel`, and forwards local
  mouse/keyboard events (pointer coords normalised to 0..1 of the video rect).

The connection handshake, end to end:
`host shares screen` → `viewer joins` → server sends `peer-joined` to host →
host creates offer → server relays offer → viewer answers → ICE candidates
trickle both ways via `signal` → media + data channel open.

### `public/` — static assets

Hand-written `index.html`, `host.html`, `viewer.html`, and `style.css`.
`public/dist/` holds esbuild output (`host.js`, `viewer.js`) and is gitignored —
never edit files there; edit the `src/client/*.ts` sources.

## Conventions

- ESM everywhere (`"type": "module"`). Server/shared imports use explicit `.js`
  extensions (required by `NodeNext` resolution in `tsconfig.server.json`); the
  client is bundled by esbuild and uses the same `.js` import style.
- Two tsconfigs: `tsconfig.json` is the no-emit typecheck config for all of
  `src` (DOM + Node libs, `Bundler` resolution). `tsconfig.server.json` extends
  it to actually emit the server to `dist/` (Node libs only, `NodeNext`).
- `strict` plus `noUnusedLocals`/`noUnusedParameters` and
  `verbatimModuleSyntax` are on — use `import type` for type-only imports.
- Tests are colocated as `*.test.ts` next to the code and use the built-in
  `node:test` + `node:assert/strict` runner (no Jest/Vitest).

## Known limitation to keep in mind

A sandboxed browser tab cannot inject input into the host OS, so `host.ts`
currently visualises/logs received `InputEvent`s rather than driving the real
desktop. Real control requires a native companion agent that receives the same
`InputEvent` stream and performs OS-level injection. If asked to "make remote
control actually work," that agent — not the browser host — is where the work
goes; reuse the existing `InputEvent` protocol so the viewer needs no changes.
