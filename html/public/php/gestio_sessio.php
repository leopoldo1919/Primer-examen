<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

function usuariIniciatSessio() {
    return isset($_SESSION['nom_usuari']);
}

function mostrarBotoIniciaSessio() {
    echo '<button id="loginBtn" class="btn btn-primary">Inicia Sessió</button>';
}

function mostrarBotoPerfil() {
    echo '<a href="?r=perfil"><button class="btn btn-primary">Perfil</button></a>';
}

function obtenirNomUsuari() {
    return usuariIniciatSessio() ? $_SESSION['nom_usuari'] : null;
}
?>
