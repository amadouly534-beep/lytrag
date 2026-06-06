// Wire formats shared by the signaling server and both browser clients.
//
// Two transports exist in lytrag:
//   1. The WebSocket signaling channel (this file: ClientMessage / ServerMessage),
//      used only to bootstrap a WebRTC peer connection.
//   2. The WebRTC data channel (InputEvent), used after connect to stream
//      pointer/keyboard events from the viewer to the host.

export type Role = 'host' | 'viewer';

// These mirror the browser's RTCSessionDescriptionInit / RTCIceCandidateInit
// structurally, so the protocol stays DOM-free and compiles on the Node server
// (which never inspects the payload, only relays it).
export interface SessionDescription {
  type: 'offer' | 'answer' | 'pranswer' | 'rollback';
  sdp?: string;
}

export interface IceCandidate {
  candidate?: string;
  sdpMid?: string | null;
  sdpMLineIndex?: number | null;
  usernameFragment?: string | null;
}

/** Opaque WebRTC negotiation payload relayed verbatim between peers. */
export type SignalPayload = SessionDescription | { candidate: IceCandidate };

// ---- Client -> Server ----

export interface JoinMessage {
  type: 'join';
  role: Role;
  sessionId: string;
}

export interface SignalMessage {
  type: 'signal';
  data: SignalPayload;
}

export type ClientMessage = JoinMessage | SignalMessage;

// ---- Server -> Client ----

export interface PeerJoinedMessage {
  type: 'peer-joined';
  role: Role;
}

export interface PeerLeftMessage {
  type: 'peer-left';
  role: Role;
}

export interface ErrorMessage {
  type: 'error';
  message: string;
}

export type ServerMessage =
  | SignalMessage
  | PeerJoinedMessage
  | PeerLeftMessage
  | ErrorMessage;

// ---- WebRTC data channel: viewer -> host input ----

export type InputEvent =
  | { kind: 'mousemove'; x: number; y: number }
  | { kind: 'mousedown'; x: number; y: number; button: number }
  | { kind: 'mouseup'; x: number; y: number; button: number }
  | { kind: 'wheel'; dx: number; dy: number }
  | { kind: 'keydown'; key: string; code: string }
  | { kind: 'keyup'; key: string; code: string };

/** Name of the WebRTC data channel the host opens for input relay. */
export const INPUT_CHANNEL = 'input';
