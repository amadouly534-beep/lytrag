# lytrag

Browser-based remote desktop over WebRTC. A **host** shares its screen from one
browser tab; a **viewer** watches it in another and streams pointer/keyboard
events back. A small Node server only does WebSocket **signaling** — the media
and input flow peer-to-peer over WebRTC and never touch the server.

## Quick start

```bash
npm install
npm run dev          # esbuild (client) + tsx watch (server) on http://localhost:3000
```

1. Open <http://localhost:3000/host.html>, click **Share screen**.
2. Copy the generated **viewer link** and open it (another tab, or another
   machine that can reach the server).
3. The viewer sees the host's screen; mouse/keyboard events are sent to the host.

For two different machines, serve over HTTPS — `getDisplayMedia` and WebRTC
require a secure context off `localhost`.

## Scripts

| Command            | Purpose                                              |
| ------------------ | ---------------------------------------------------- |
| `npm run dev`      | Watch-build the client and run the server (tsx)      |
| `npm run build`    | Bundle client to `public/dist/` + compile server     |
| `npm start`        | Run the compiled server from `dist/`                 |
| `npm run typecheck`| Type-check everything (`tsc --noEmit`)               |
| `npm run lint`     | ESLint                                               |
| `npm test`         | Run unit tests (node test runner via tsx)           |

## Limitations

A sandboxed browser tab cannot inject input into the host's operating system,
so the host currently **visualises** the viewer's pointer and logs events
rather than controlling the real desktop. True control needs a native companion
agent — see `CLAUDE.md`.
