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
    
    <title>Pàgina Inicial</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand">Exercicis de la Primera Prova</a>
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
                <button id="loginBtn" class="btn btn-primary">Inicia Sessió</button>

                </li>
            </ul>
        </div>
    </nav>

    <!-- Carrusel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slide1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slide3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
