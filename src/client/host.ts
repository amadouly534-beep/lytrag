import { connectSignaling, ICE_SERVERS, isIceCandidate } from './rtc.js';
import { INPUT_CHANNEL, type InputEvent } from '../shared/protocol.js';

// The host shares its screen and listens for input events from the viewer.
// NOTE: a browser tab is sandboxed and CANNOT inject input into the host OS.
// Received events are visualised as a remote cursor + logged. Real control
// would require a native companion agent (see CLAUDE.md > Limitations).

const params = new URLSearchParams(location.search);
const sessionId = params.get('session') ?? crypto.randomUUID().slice(0, 8);

const statusEl = required('status');
const linkEl = required<HTMLAnchorElement>('viewer-link');
const overlay = required('overlay');
const shareBtn = required<HTMLButtonElement>('share');

const viewerUrl = `${location.origin}/viewer.html?session=${sessionId}`;
linkEl.textContent = viewerUrl;
linkEl.href = viewerUrl;

const pc = new RTCPeerConnection({ iceServers: ICE_SERVERS });
let localStream: MediaStream | null = null;

const cursor = document.createElement('div');
cursor.className = 'remote-cursor';
overlay.appendChild(cursor);

// Host owns the input data channel; the viewer picks it up via ondatachannel.
const inputChannel = pc.createDataChannel(INPUT_CHANNEL);
inputChannel.onmessage = (ev) => handleInput(JSON.parse(ev.data as string) as InputEvent);

pc.onicecandidate = (e) => {
  if (e.candidate) signaling.signal({ candidate: e.candidate.toJSON() });
};
pc.onconnectionstatechange = () => {
  setStatus(`peer connection: ${pc.connectionState}`);
};

const signaling = connectSignaling(sessionId, 'host', async (msg) => {
  switch (msg.type) {
    case 'peer-joined':
      if (msg.role === 'viewer') await sendOffer();
      break;
    case 'peer-left':
      setStatus('viewer disconnected');
      break;
    case 'signal': {
      if (isIceCandidate(msg.data)) {
        await pc.addIceCandidate(msg.data.candidate);
      } else {
        // Viewer's SDP answer.
        await pc.setRemoteDescription(msg.data);
      }
      break;
    }
    case 'error':
      setStatus(`error: ${msg.message}`);
      break;
  }
});

shareBtn.addEventListener('click', async () => {
  localStream = await navigator.mediaDevices.getDisplayMedia({ video: true, audio: false });
  for (const track of localStream.getTracks()) pc.addTrack(track, localStream);
  shareBtn.disabled = true;
  setStatus('screen captured — share the viewer link to connect');
});

async function sendOffer(): Promise<void> {
  if (!localStream) {
    setStatus('viewer is waiting — click "Share screen" to start');
    return;
  }
  const offer = await pc.createOffer();
  await pc.setLocalDescription(offer);
  signaling.signal(offer);
  setStatus('viewer joined — negotiating');
}

function handleInput(input: InputEvent): void {
  if (input.kind === 'mousemove') {
    cursor.style.left = `${input.x * 100}%`;
    cursor.style.top = `${input.y * 100}%`;
  }
  // Real OS injection is out of scope for a sandboxed tab; log for now.
  console.debug('remote input', input);
}

function setStatus(text: string): void {
  statusEl.textContent = text;
}

function required<T extends HTMLElement = HTMLElement>(id: string): T {
  const el = document.getElementById(id);
  if (!el) throw new Error(`missing #${id} in host.html`);
  return el as T;
}
