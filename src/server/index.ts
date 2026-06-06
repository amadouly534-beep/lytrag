import { createServer } from 'node:http';
import path from 'node:path';
import { fileURLToPath } from 'node:url';
import express from 'express';
import { WebSocketServer, WebSocket } from 'ws';
import type { ClientMessage, ServerMessage, Role } from '../shared/protocol.js';
import { SessionRegistry } from './sessions.js';

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const PORT = Number(process.env.PORT ?? 3000);

const app = express();
const publicDir = path.resolve(__dirname, '../../public');
app.use(express.static(publicDir));

const httpServer = createServer(app);
const wss = new WebSocketServer({ server: httpServer, path: '/ws' });
const registry = new SessionRegistry();

function send(ws: WebSocket, msg: ServerMessage): void {
  if (ws.readyState === WebSocket.OPEN) ws.send(JSON.stringify(msg));
}

wss.on('connection', (ws) => {
  let sessionId: string | undefined;
  let role: Role | undefined;

  ws.on('message', (raw) => {
    let msg: ClientMessage;
    try {
      msg = JSON.parse(raw.toString()) as ClientMessage;
    } catch {
      send(ws, { type: 'error', message: 'invalid JSON' });
      return;
    }

    switch (msg.type) {
      case 'join': {
        const result = registry.join(msg.sessionId, msg.role, ws);
        if (!result.ok) {
          send(ws, { type: 'error', message: result.error });
          return;
        }
        sessionId = msg.sessionId;
        role = msg.role;
        // Tell both sides about each other so the host can start an offer.
        if (result.peer) {
          send(result.peer, { type: 'peer-joined', role });
          send(ws, { type: 'peer-joined', role: role === 'host' ? 'viewer' : 'host' });
        }
        return;
      }
      case 'signal': {
        if (!sessionId || !role) return;
        const peer = registry.peer(sessionId, role);
        if (peer) send(peer, msg);
        return;
      }
    }
  });

  ws.on('close', () => {
    if (!sessionId || !role) return;
    const peer = registry.leave(sessionId, role);
    if (peer) send(peer, { type: 'peer-left', role });
  });
});

httpServer.listen(PORT, () => {
  console.log(`lytrag signaling server on http://localhost:${PORT}`);
});
