// Script per gestionar l'obertura i tancament dels modals

document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('loginBtn');
    const loginModal = document.getElementById('loginModal');
    const closeLoginModal = document.getElementById('closeLoginModal');
    const registerBtnFromLogin = document.getElementById('registerBtnFromLogin');
    
    const registerModal = document.getElementById('registerModal');
    const closeRegisterModal = document.getElementById('closeRegisterModal');
    const loginBtnFromRegister = document.getElementById('loginBtnFromRegister');

    // Obrir modal d'inici de sessió
    loginBtn.onclick = function() {
        loginModal.style.display = 'flex';
    }

    // Tancar modal d'inici de sessió
    closeLoginModal.onclick = function() {
        loginModal.style.display = 'none';
    }

    // Obrir modal de registre des del modal d'inici de sessió
    registerBtnFromLogin.onclick = function() {
        loginModal.style.display = 'none';
        registerModal.style.display = 'flex';
    }

    // Obrir modal d'inici de sessió des del modal de registre
    loginBtnFromRegister.onclick = function() {
        registerModal.style.display = 'none';
        loginModal.style.display = 'flex';
    }

    // Tancar modal de registre
    closeRegisterModal.onclick = function() {
        registerModal.style.display = 'none';
    }

    // Tancar els modals quan es fa clic fora del contingut
    window.onclick = function(event) {
        if (event.target == loginModal) {
            loginModal.style.display = 'none';
        }
        if (event.target == registerModal) {
            registerModal.style.display = 'none';
        }
    }
});
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