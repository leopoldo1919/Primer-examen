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
    <title>Credits</title>
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
<!-- Footer -->
<footer class="text-center">
        <div class="text-center p-3">
            &copy; 2024 Exercicis de la Primera Prova. Tots els drets reservats. <br>
          <a href="javascript:void(0)" onclick="notificacioEmail()">Contacta amb Leo Campà</a>
        </div>
    </footer>


    <script src="js/script.js"></script>

</body>
</html>