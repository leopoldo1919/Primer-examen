<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Incloure la connexió a la base de dades
require 'connexio.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenir les dades del formulari
    $nom_canso = trim($_POST['canso']);
    $artista = trim($_POST['artista']);
    $arxiu_mp3 = $_FILES['arxiu'];

    // Validar que no hi hagi camps buits
    if (empty($nom_canso) || empty($artista) || empty($arxiu_mp3['name'])) {
        echo "Tots els camps són obligatoris.";
        exit;
    }

    // Comprovar que l'arxiu és un MP3
    $extensio = strtolower(pathinfo($arxiu_mp3['name'], PATHINFO_EXTENSION));
    if ($extensio !== 'mp3') {
        echo "Només es permeten arxius MP3.";
        exit;
    }

    // Moure l'arxiu MP3 al directori de pujada
    $directori_destinacio = 'uploads/';
    if (!is_dir($directori_destinacio)) {
        mkdir($directori_destinacio, 0777, true); // Crea la carpeta si no existeix
    }

    // Generar un nom únic per evitar col·lisions
    $nom_fitxer = uniqid('canso_', true) . '.' . $extensio;
    $ruta_arxiu = $directori_destinacio . $nom_fitxer;

    if (!move_uploaded_file($arxiu_mp3['tmp_name'], $ruta_arxiu)) {
        echo "Error al pujar l'arxiu MP3.";
        exit;
    }

    // Inserir la cançó a la base de dades
    $stmt = $conn->prepare("INSERT INTO cansons (nom_canso, artista, ruta_arxiu) VALUES (?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("sss", $nom_canso, $artista, $ruta_arxiu);

        if ($stmt->execute()) {
            // Redirigir a la pàgina principal amb èxit
            header('Location: /Public/?r='); 
            exit;
        } else {
            echo "Error en registrar la cançó. Torna-ho a provar més tard.";
        }
    } else {
        echo "Error en la consulta SQL.";
    }
}
?>

