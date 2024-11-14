<?php
session_start();

// Destruir totes les dades de sessió
$_SESSION = [];
session_unset();
session_destroy();

// Redirigir a la pàgina principal (inici)
header('Location: /public/?r=');
exit;
?>
