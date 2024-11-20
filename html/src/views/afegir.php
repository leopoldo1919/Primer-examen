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
    <div id="afegirCanso" class="container">
        <div class="afegirCanso_contingut">
            <h2>Afegir Canço</h2>
            <form id="registrarCansoForm" class="registrarCansoForm" action="php/registrarCanso.php" method="post" enctype="multipart/form-data">

                <label for="canso">Nom de la cançó:</label>
                <input type="text" id="canso" name="canso" required><br><br>

                <label for="artista">Artista:</label>
                <input type="text" id="artista" name="artista" required><br><br>

                <label for="arxiu">Arxiu MP3:</label>
                <input type="file" id="arxiu" name="arxiu" accept=".mp3" required><br><br>

                <button type="submit">Registrar Cançó</button>
            </form>
        </div>
    </div>


    <script src="js/script.js"></script>

</body>
</html>