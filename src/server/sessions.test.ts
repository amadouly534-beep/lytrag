import { test } from 'node:test';
import assert from 'node:assert/strict';
import type { WebSocket } from 'ws';
import { SessionRegistry } from './sessions.js';

// The registry only holds references and never calls socket methods,
// so a plain object stands in for a real WebSocket.
const fakeWs = (): WebSocket => ({}) as unknown as WebSocket;

test('first peer to join has no peer yet', () => {
  const reg = new SessionRegistry();
  const result = reg.join('s1', 'host', fakeWs());
  assert.deepEqual(result, { ok: true, peer: undefined });
});

test('second peer sees the first as its peer', () => {
  const reg = new SessionRegistry();
  const host = fakeWs();
  reg.join('s1', 'host', host);
  const result = reg.join('s1', 'viewer', fakeWs());
  assert.equal(result.ok, true);
  assert.equal(result.ok && result.peer, host);
});

test('duplicate role in a session is rejected', () => {
  const reg = new SessionRegistry();
  reg.join('s1', 'host', fakeWs());
  const result = reg.join('s1', 'host', fakeWs());
  assert.equal(result.ok, false);
});

test('peer() resolves the opposite role', () => {
  const reg = new SessionRegistry();
  const host = fakeWs();
  const viewer = fakeWs();
  reg.join('s1', 'host', host);
  reg.join('s1', 'viewer', viewer);
  assert.equal(reg.peer('s1', 'viewer'), host);
  assert.equal(reg.peer('s1', 'host'), viewer);
});

test('leaving returns the surviving peer and prunes empty sessions', () => {
  const reg = new SessionRegistry();
  const host = fakeWs();
  const viewer = fakeWs();
  reg.join('s1', 'host', host);
  reg.join('s1', 'viewer', viewer);

  assert.equal(reg.leave('s1', 'host'), viewer);
  assert.equal(reg.size, 1, 'session still alive while viewer connected');

  assert.equal(reg.leave('s1', 'viewer'), undefined);
  assert.equal(reg.size, 0, 'empty session is pruned');
});
