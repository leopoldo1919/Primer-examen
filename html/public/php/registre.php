<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incloure la connexió a la base de dades
require 'connexio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenir les dades del formulari
    $nom_usuari = $_POST['newUsername'];
    $correu = $_POST['email'];
    $contrasenya = $_POST['newPassword'];
    $confirm_contrasenya = $_POST['confirmPassword'];

    // Validar que no hi hagi camps buits
    if (empty($nom_usuari) || empty($correu) || empty($contrasenya) || empty($confirm_contrasenya)) {
        echo "Tots els camps són obligatoris.";
        exit;
    }

    // Comprovar que les contrasenyes coincideixin
    if ($contrasenya !== $confirm_contrasenya) {
        echo "Les contrasenyes no coincideixen.";
        exit;
    }

    // Encriptar la contrasenya
    $contrasenya_encriptada = password_hash($contrasenya, PASSWORD_BCRYPT);

    // Comprovar si el correu ja està registrat
    $stmt = $conn->prepare("SELECT id FROM usuaris WHERE correu = ?");
    $stmt->bind_param("s", $correu);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "El correu ja està registrat.";
        exit;
    }

    // Inserir l'usuari a la base de dades
    $stmt = $conn->prepare("INSERT INTO usuaris (nom_usuari, correu, contrasenya) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom_usuari, $correu, $contrasenya_encriptada);

    if ($stmt->execute()) {
        // Registrar l'usuari en la sessió
        $_SESSION['nom_usuari'] = $nom_usuari;

        // Redirigir a la pàgina de perfil
        header('Location: /public/?r=perfil');
        exit;
    } else {
        echo "Error en registrar l'usuari. Torna-ho a provar més tard.";
    }
}
?>

