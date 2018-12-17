<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 6 exercice 6</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 6 exercice 6</h1>
                    <h3 align="center">Exercice 6</h3>
                    <p align="center">Faire une page index.php. Tester sur cette page que tous les paramètres 
                        de cette URL existent et les afficher: index.php?building=12&room=101</p>
                </div>
            </div>
            <p align="center"><a href="index.php?building=12&room=101">Tester ici !</a></p>
            <?php
            if (isset($_GET['building']) AND isset($_GET['room'])) { // On teste si le paramètre building et room sont bien présent et si oui, on les affiche en echo ci-dessous
                echo '<p align="center">Nous sommes dans le batiment ' . $_GET['building'] . '  chambre ' . $_GET['room'] . '.</p>';
            } else { // s'il nous manque un paramètre, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>
