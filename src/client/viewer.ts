import { connectSignaling, ICE_SERVERS, isIceCandidate } from './rtc.js';
import type { InputEvent } from '../shared/protocol.js';

// The viewer receives the host's screen and forwards local pointer/keyboard
// events back over the data channel the host created.

const sessionId = new URLSearchParams(location.search).get('session');
const statusEl = required('status');
const video = required<HTMLVideoElement>('screen');

if (!sessionId) {
  statusEl.textContent = 'Missing ?session=... in the URL';
  throw new Error('viewer requires a session id');
}

const pc = new RTCPeerConnection({ iceServers: ICE_SERVERS });
let inputChannel: RTCDataChannel | null = null;

pc.ontrack = (e) => {
  video.srcObject = e.streams[0];
  statusEl.textContent = 'connected';
};
pc.ondatachannel = (e) => {
  inputChannel = e.channel;
};
pc.onicecandidate = (e) => {
  if (e.candidate) signaling.signal({ candidate: e.candidate.toJSON() });
};
pc.onconnectionstatechange = () => {
  statusEl.textContent = `peer connection: ${pc.connectionState}`;
};

const signaling = connectSignaling(sessionId, 'viewer', async (msg) => {
  switch (msg.type) {
    case 'signal': {
      if (isIceCandidate(msg.data)) {
        await pc.addIceCandidate(msg.data.candidate);
      } else {
        // Host's SDP offer -> answer.
        await pc.setRemoteDescription(msg.data);
        const answer = await pc.createAnswer();
        await pc.setLocalDescription(answer);
        signaling.signal(answer);
      }
      break;
    }
    case 'peer-left':
      statusEl.textContent = 'host disconnected';
      break;
    case 'error':
      statusEl.textContent = `error: ${msg.message}`;
      break;
  }
});

function sendInput(input: InputEvent): void {
  if (inputChannel?.readyState === 'open') inputChannel.send(JSON.stringify(input));
}

/** Pointer position normalised to 0..1 within the video element. */
function normalise(e: MouseEvent): { x: number; y: number } {
  const rect = video.getBoundingClientRect();
  return {
    x: (e.clientX - rect.left) / rect.width,
    y: (e.clientY - rect.top) / rect.height,
  };
}

video.addEventListener('mousemove', (e) => {
  const { x, y } = normalise(e);
  sendInput({ kind: 'mousemove', x, y });
});
video.addEventListener('mousedown', (e) => {
  const { x, y } = normalise(e);
  sendInput({ kind: 'mousedown', x, y, button: e.button });
});
video.addEventListener('mouseup', (e) => {
  const { x, y } = normalise(e);
  sendInput({ kind: 'mouseup', x, y, button: e.button });
});
video.addEventListener('wheel', (e) => {
  sendInput({ kind: 'wheel', dx: e.deltaX, dy: e.deltaY });
});
window.addEventListener('keydown', (e) => sendInput({ kind: 'keydown', key: e.key, code: e.code }));
window.addEventListener('keyup', (e) => sendInput({ kind: 'keyup', key: e.key, code: e.code }));

function required<T extends HTMLElement = HTMLElement>(id: string): T {
  const el = document.getElementById(id);
  if (!el) throw new Error(`missing #${id} in viewer.html`);
  return el as T;
}
