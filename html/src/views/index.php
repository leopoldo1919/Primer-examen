<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} 
?>
<!DOCTYPE html>
<html lang="cat">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portada</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <p class="navbar-brand">Exercicis de la Primera Prova</p>
        
        <div class="collapse navbar-collapse" id="navbarNav">
                    <a class="nav-link" href="?r=">Portada</a>
                    <a class="nav-link" href="?r=credits">Credits</a>
                <a href="?r=afegir" ><button id="afegirBtn" class="btn btn-primary">Afegir canço</button></a>
        </div>
    </nav>
    <div class="container">
        <header class="header">
            <h1>WEBAMP</h1>
        </header>
        <section class="player">
            <h2>Player</h2>
            <p>Cançó actual: 
                <?php echo isset($_COOKIE['canso_actual']) ? htmlspecialchars($_COOKIE['canso_actual']) : 'Cap cançó està sonant.'; ?>
            </p>
            <audio id="audioPlayer" src="<?php echo isset($_COOKIE['ruta_actual']) ? htmlspecialchars($_COOKIE['ruta_actual']) : ''; ?>"></audio>
            <button id="pauseBtn" class="btn btn-warning" onclick="document.getElementById('audioPlayer').pause()">Pausa</button>
            <button id="playBtn" class="btn btn-success" onclick="document.getElementById('audioPlayer').play()">Reprodueix</button>
        </section>

        <section class="options">
            <h2>Opcions</h2>
            <label><input type="checkbox" checked> Aleatori</label><br>
            <label><input id="muteBtn" type="checkbox"> Silencia</label>
        </section>
        <section class="previous-song">
            <h2>Cançó anterior</h2>
            <p>Cançó anterior: 
                <?php echo isset($_COOKIE['canso_anterior']) ? htmlspecialchars($_COOKIE['canso_anterior']) : 'Cap cançó anterior.'; ?>
            </p>
        </section>
        <section class="song-list">
            <h2>Llista de cançons</h2>
            <ul>
                <?php include 'php/llista_cancons.php'; ?>
            </ul>
        </section>

    </div>

    <script src="js/script.js"></script>

</body>
</html>

