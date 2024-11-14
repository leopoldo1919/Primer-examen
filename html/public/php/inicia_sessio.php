<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incloure la connexió a la base de dades
require 'connexio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenir les dades del formulari
    $nom_usuari = $_POST['username'];
    $contrasenya = $_POST['password'];

    // Validar que no hi hagi camps buits
    if (empty($nom_usuari) || empty($contrasenya)) {
        echo "Tots els camps són obligatoris.";
        exit;
    }

    // Comprovar si l'usuari existeix i verificar la contrasenya
    $stmt = $conn->prepare("SELECT id, contrasenya FROM usuaris WHERE nom_usuari = ?");
    $stmt->bind_param("s", $nom_usuari);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $contrasenya_hash);
        $stmt->fetch();
        
        if (password_verify($contrasenya, $contrasenya_hash)) {
            // Registrar l'usuari en la sessió
            $_SESSION['nom_usuari'] = $nom_usuari;

            // Redirigir a la pàgina de perfil
            header('Location: /public/?r=perfil');
            exit;
        } else {
            echo "Contrasenya incorrecta.";
            exit;
        }
    } else {
        echo "<script>
                alert('Usuari no trobat');
                window.location.href = '/Public/?r=';
            </script>";
        exit;
    }
}
?>
