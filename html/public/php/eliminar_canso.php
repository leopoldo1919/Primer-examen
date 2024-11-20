<?php
session_start();

// Incloure la connexió a la base de dades
require 'connexio.php';

// Comprovar si l'usuari ha iniciat sessió
if (!isset($_SESSION['nom_canso'])) {
    header('Location: /Public/?r=index');
    exit;
}

// Obtenir el nom d'usuari de la sessió
$nom_canso = $_SESSION['nom_canso'];

// Preparar i executar la consulta per eliminar l'usuari
$stmt = $conn->prepare("DELETE FROM cansons WHERE nom_canso = ?");
$stmt->bind_param("s", $nom_canso);

if ($stmt->execute()) {
    // Destruir la sessió després d'eliminar l'usuari
    $_SESSION = [];
    session_unset();
    session_destroy();

    // Redirigir a la pàgina principal
    header('Location: /Public/?r=');
    exit;
} else {
    echo "Error en eliminar la canço. Torna-ho a provar més tard.";
}
?>
