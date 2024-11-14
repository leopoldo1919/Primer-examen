<?php
session_start();

// Incloure la connexió a la base de dades
require 'connexio.php';

// Comprovar si l'usuari ha iniciat sessió
if (!isset($_SESSION['nom_usuari'])) {
    header('Location: /Public/?r=index');
    exit;
}

// Obtenir el nom d'usuari de la sessió
$nom_usuari = $_SESSION['nom_usuari'];

// Preparar i executar la consulta per eliminar l'usuari
$stmt = $conn->prepare("DELETE FROM usuaris WHERE nom_usuari = ?");
$stmt->bind_param("s", $nom_usuari);

if ($stmt->execute()) {
    // Destruir la sessió després d'eliminar l'usuari
    $_SESSION = [];
    session_unset();
    session_destroy();

    // Redirigir a la pàgina principal
    header('Location: /Public/?r=');
    exit;
} else {
    echo "Error en eliminar l'usuari. Torna-ho a provar més tard.";
}
?>
