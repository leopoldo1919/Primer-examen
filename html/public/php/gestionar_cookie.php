<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['canso_actual']) && isset($_POST['canso_ruta']) && isset($_POST['artista'])) {
    $canso_actual = $_POST['canso_actual'];
    $canso_ruta = $_POST['canso_ruta'];
    $artista = $_POST['artista'];

    // Si ja hi ha una cançó actual, guardar-la com a anterior
    if (isset($_COOKIE['canso_actual'])) {
        setcookie('canso_anterior', $_COOKIE['canso_actual'], time() + (86400 * 30), '/'); // 30 dies
    } else {
        setcookie('canso_anterior', '', time() + (86400 * 30), '/');
    }

    if (isset($_COOKIE['ruta_actual'])) {
        setcookie('ruta_anterior', $_COOKIE['ruta_actual'], time() + (86400 * 30), '/'); // 30 dies
    } else {
        setcookie('ruta_anterior', '', time() + (86400 * 30), '/');
    }

    // Actualitzar la cançó actual i la seva ruta
    setcookie('canso_actual', $canso_actual, time() + (86400 * 30), '/'); // 30 dies
    setcookie('ruta_actual', $canso_ruta, time() + (86400 * 30), '/'); // 30 dies
    setcookie('artista', $artista, time() + (86400 * 30), '/'); // 30 dies

    // Redirigir a la portada
    header('Location: /Public/?r='); 
    exit;
}
?>

