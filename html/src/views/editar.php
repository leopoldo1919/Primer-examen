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
        <h2>Editar Cançó</h2>
        <form id="editarCansoForm" class="editarCansoForm" action="php/editar_canso.php" method="post">
            <!-- Camp ocult per passar l'ID de la cançó -->
            <input type="hidden" name="canso_id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">

            <!-- Nom de la cançó -->
            <label for="canso">Nom de la cançó:</label>
            <input type="text" id="canso" name="canso" 
                   value="<?php echo isset($_GET['nom_canso']) ? htmlspecialchars($_GET['nom_canso']) : ''; ?>" required><br><br>

            <!-- Artista -->
            <label for="artista">Artista:</label>
            <input type="text" id="artista" name="artista" 
                   value="<?php echo isset($_GET['artista']) ? htmlspecialchars($_GET['artista']) : ''; ?>" required><br><br>

            <button type="submit">Editar Cançó</button>
        </form>
    </div>
</div>



    <script src="js/script.js"></script>

</body>
</html>
