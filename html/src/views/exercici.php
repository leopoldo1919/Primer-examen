<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include 'php/gestio_sessio.php'; 
?>
<!DOCTYPE html>
<html lang="cat">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/custom-styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Exercici de la proba</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <p class="navbar-brand">Exercicis de la Primera Prova</p>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="?r=">Inici</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?r=exercici">Exercici</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (usuariIniciatSessio()) {
                        mostrarBotoPerfil();
                    } else {
                        mostrarBotoIniciaSessio();
                    }
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <div class="media-controls">
        <audio id="audioPlayer" src="audio/Ultra instint.mp3"></audio>
        <button id="playBtn" class="btn btn-success">Reprodueix</button>
        <button id="pauseBtn" class="btn btn-warning">Pausa</button>
        <button id="muteBtn" class="btn btn-danger">Silencia</button>
    </div>
<!-- Footer -->
<footer class="text-center">
        <div class="text-center p-3">
            &copy; 2024 Exercicis de la Primera Prova. Tots els drets reservats. <br>
            <a href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">Pagina bootstrap</a> | <a href="javascript:void(0)" onclick="notificacioEmail()">Contacta amb Leo Campà</a>
        </div>
    </footer>

<!-- Requadre per iniciar sessió -->
<div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeLoginModal">&times;</span>
            <h2>Inicia Sessió</h2>
            <form id="loginForm" action="php/inicia_sessio.php" method="post">
                <label for="username">Nom d'usuari:</label>
                <input type="text" id="username" name="username" required><br><br>
                <label for="password">Contrasenya:</label>
                <input type="password" id="password" name="password" required><br><br>
                <button type="submit">Inicia Sessió</button>
            </form>
            <p>No tens cap compte? <button id="registerBtnFromLogin">Registra't aquí</button></p>
        </div>
    </div>

    <!-- Requadre per registrar-se -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeRegisterModal">&times;</span>
            <h2>Registra't</h2>
            <form id="registerForm" action="php/registre.php" method="post">
                <label for="newUsername">Nom d'usuari:</label>
                <input type="text" id="newUsername" name="newUsername" required><br><br>
                <label for="email">Correu electrònic:</label>
                <input type="email" id="email" name="email" required><br><br>
                <label for="newPassword">Contrasenya:</label>
                <input type="password" id="newPassword" name="newPassword" required><br><br>
                <label for="confirmPassword">Confirma la contrasenya:</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required><br><br>
                <button type="submit">Registra't</button>
            </form>
            <p>Ja tens un compte? <button id="loginBtnFromRegister">Inicia Sessió aquí</button></p>
        </div>
    </div>


    <!-- Scripts de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>