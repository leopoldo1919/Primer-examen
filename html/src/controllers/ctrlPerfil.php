<?php

function ctrlPerfil($request, $response, $container){
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    // Comprovar si l'usuari ha iniciat sessió
    if (!isset($_SESSION['nom_usuari'])) {
        // Redirigeix a la pàgina d'inici si no ha iniciat sessió
        header('Location: index.php');
        exit;
    }

    // Passar el nom d'usuari a la vista
    $response->set("nom_usuari", $_SESSION['nom_usuari']);
    $response->setTemplate("perfil.php");

    return $response;
}
