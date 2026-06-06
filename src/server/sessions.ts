import type { WebSocket } from 'ws';
import type { Role } from '../shared/protocol.js';

export interface Session {
  host?: WebSocket;
  viewer?: WebSocket;
}

export type JoinResult =
  | { ok: true; peer?: WebSocket }
  | { ok: false; error: string };

const otherRole = (role: Role): Role => (role === 'host' ? 'viewer' : 'host');

/**
 * In-memory map of sessionId -> the (at most) two peers in that session.
 * Pure relay bookkeeping with no network concerns, so it can be unit tested
 * without a running WebSocket server.
 */
export class SessionRegistry {
  private readonly sessions = new Map<string, Session>();

  /** Attach a socket to a session in the given role. Rejects duplicate roles. */
  join(sessionId: string, role: Role, ws: WebSocket): JoinResult {
    const session = this.sessions.get(sessionId) ?? {};
    if (session[role]) {
      return { ok: false, error: `${role} already connected for session "${sessionId}"` };
    }
    session[role] = ws;
    this.sessions.set(sessionId, session);
    return { ok: true, peer: session[otherRole(role)] };
  }

  /** The opposite peer in a session, if connected. */
  peer(sessionId: string, role: Role): WebSocket | undefined {
    return this.sessions.get(sessionId)?.[otherRole(role)];
  }

  /** Detach a role; returns the peer that should be notified, if any. */
  leave(sessionId: string, role: Role): WebSocket | undefined {
    const session = this.sessions.get(sessionId);
    if (!session) return undefined;
    delete session[role];
    const peer = session[otherRole(role)];
    if (!session.host && !session.viewer) {
      this.sessions.delete(sessionId);
    }
    return peer;
  }

  get size(): number {
    return this.sessions.size;
  }
}
