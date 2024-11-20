function notificacioEmail() {
    alert('Email de contacte: lcampaprost@cendrassos.net');
}
document.addEventListener('DOMContentLoaded', function() {
    const audioElement = document.getElementById('audioPlayer');
    const playBtn = document.getElementById('playBtn');
    const pauseBtn = document.getElementById('pauseBtn');
    const muteBtn = document.getElementById('muteBtn');

    // Reproduir àudio
    playBtn.onclick = function() {
        audioElement.play();
    }

    // Pausar àudio
    pauseBtn.onclick = function() {
        audioElement.pause();
    }

    // Silenciar/desilenciar àudio
    muteBtn.onclick = function() {
        if (audioElement.muted) {
            audioElement.muted = false;
            muteBtn.textContent = 'Silencia';
        } else {
            audioElement.muted = true;
            muteBtn.textContent = 'Desilencia';
        }
    }
});