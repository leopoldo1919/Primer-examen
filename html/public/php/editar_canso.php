<?php
// Assegurar que no hi ha sortida abans de `header()`
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['canso_id'])) {
    require 'connexio.php';

    // Obtenir les dades del formulari
    $canso_id = intval($_POST['canso_id']); // Sanititzar l'ID
    $nom_canso = trim($_POST['canso']); // Nom de la cançó
    $artista = trim($_POST['artista']); // Artista

    // Validar que no hi hagi camps buits
    if (empty($nom_canso) || empty($artista)) {
        // Opció: Guardar missatge d'error en sessió
        $_SESSION['error'] = "Tots els camps són obligatoris.";
        header('Location: /src/views/editar_canso.php?id=' . $canso_id);
        exit;
    }

    // Actualitzar les dades a la base de dades
    $stmt = $conn->prepare("UPDATE cansons SET nom_canso = ?, artista = ? WHERE id = ?");
    $stmt->bind_param("ssi", $nom_canso, $artista, $canso_id);

    if ($stmt->execute()) {
        // Opció: Guardar missatge d'èxit en sessió
        $_SESSION['success'] = "La cançó s'ha actualitzat correctament.";
        header('Location: /src/views/index.php'); // Redirigir
        exit;
    } else {
        $_SESSION['error'] = "Error en actualitzar la cançó. Torna-ho a provar més tard.";
        header('Location: /src/views/editar_canso.php?id=' . $canso_id);
        exit;
    }
}
?>
