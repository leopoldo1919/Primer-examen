<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require 'php/connexio.php';

$cancons = [];
$sql = "SELECT id, nom_canso, artista, ruta_arxiu FROM cansons";
if ($result = $conn->query($sql)) {
    $cancons = $result->fetch_all(MYSQLI_ASSOC);
}

if (!empty($cancons)) {
    foreach ($cancons as $canso) {
        echo '<li>';
        echo htmlspecialchars($canso['nom_canso']) . ' (' . htmlspecialchars($canso['artista']) . ')';
        echo '<form method="post" action="php/gestionar_cookie.php" style="display:inline;">';
        echo '<input type="hidden" name="canso_actual" value="' . htmlspecialchars($canso['nom_canso']) . '">';
        echo '<input type="hidden" name="canso_ruta" value="' . htmlspecialchars($canso['ruta_arxiu']) . '">';
        echo '<button type="submit" class="play">Reprodueix</button>';
        echo '</form>';

        // Formulari per eliminar la cançó
        echo '<form method="post" action="php/eliminar_canso.php" style="display:inline;">';
        echo '<input type="hidden" name="canso_id" value="' . htmlspecialchars($canso['id']) . '">';
        echo '<input type="hidden" name="canso_ruta" value="' . htmlspecialchars($canso['ruta_arxiu']) . '">';
        echo '<button type="submit" class="eliminar">Elimina</button>';
        echo '</form>';

        // Formulari per editar la cançó

        echo '<input type="hidden" name="canso_id" value="' . htmlspecialchars($canso['nom_canso']) . '">';
        echo '<input type="hidden" name="canso_id" value="' . htmlspecialchars($canso['artista']) . '">';
        echo '<input type="hidden" name="canso_ruta" value="' . htmlspecialchars($canso['ruta_arxiu']) . '">';
        echo '<a href="?r=editar"><button id="editarBtn" class="editar">Editar canço</button></a>';


        echo '</li>';
    }
} else {
    echo '<li>No hi ha cançons disponibles.</li>';
}
?>

