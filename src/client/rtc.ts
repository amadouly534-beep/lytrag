import type { ClientMessage, ServerMessage, Role, SignalPayload } from '../shared/protocol.js';

/** Public STUN server is enough for LAN / most NATs; add a TURN server for strict NATs. */
export const ICE_SERVERS: RTCIceServer[] = [{ urls: 'stun:stun.l.google.com:19302' }];

export interface Signaling {
  /** Forward a WebRTC negotiation payload (SDP or ICE candidate) to the peer. */
  signal: (data: SignalPayload) => void;
}

/**
 * Opens the signaling WebSocket, announces this peer's role/session, and
 * dispatches decoded server messages to `onMessage`.
 */
export function connectSignaling(
  sessionId: string,
  role: Role,
  onMessage: (msg: ServerMessage) => void,
): Signaling {
  const proto = location.protocol === 'https:' ? 'wss' : 'ws';
  const ws = new WebSocket(`${proto}://${location.host}/ws`);

  ws.addEventListener('open', () => {
    const join: ClientMessage = { type: 'join', role, sessionId };
    ws.send(JSON.stringify(join));
  });
  ws.addEventListener('message', (ev) => {
    onMessage(JSON.parse(ev.data as string) as ServerMessage);
  });

  return {
    signal(data: SignalPayload) {
      const msg: ClientMessage = { type: 'signal', data };
      if (ws.readyState === WebSocket.OPEN) ws.send(JSON.stringify(msg));
    },
  };
}

/** Narrows a relayed signal payload to an ICE candidate. */
export function isIceCandidate(
  data: SignalPayload,
): data is { candidate: RTCIceCandidateInit } {
  return 'candidate' in data;
}
