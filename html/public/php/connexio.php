<?php
$servername = "db"; // Nom del servei definit en el docker-compose
$username = "usuari";
$password = "contrasenya";
$database = "exercicis";

// Crear la connexió
$conn = new mysqli($servername, $username, $password, $database);

// Comprovar la connexió
if ($conn->connect_error) {
    die("Error de connexió: " . $conn->connect_error);
}
?>
