<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Erreur 404</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php
        // chemin absolu
        include ROOT_PATH."/view/inc/menu.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/menu.php";

        ?>
    </header>

    <main>
        <section style="text-align: center; margin-top: 10vh;">
            <h1>Erreur 404<span class="text-highlight"> cette page n'existe plus</span></h1>

            <a href="./" class="btn btn-primary">Retour à l'accueil</a>
        </section>
    </main>

    <footer>
        <?php
        // chemin absolu
        include ROOT_PATH."/view/inc/footer.php";
        // chemin relatif (en PHP à partir de la page qui appelle)
        # include "inc/footer.php";

        ?>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>