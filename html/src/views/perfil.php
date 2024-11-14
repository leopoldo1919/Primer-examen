<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


// Comprovar si l'usuari ha iniciat sessió
if (!isset($_SESSION['nom_usuari'])) {
    header('Location: index.php');
    exit;
}

?>
<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de l'Usuari</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Benvingut/da, <?php echo htmlspecialchars($_SESSION['nom_usuari']); ?>!</h1>
    <p>Aquesta és la teva pàgina de perfil.</p>
    <form method="post" action="php/tancar_sessio.php">
        <button type="submit">Tanca Sessió</button>
    </form>
    <form method="post" action="php/eliminar_usuari.php">
        <button type="submit" style="background-color: #dc3545; color: white;">Elimina el Compte</button>
    </form>
</body>
</html>


