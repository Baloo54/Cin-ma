<?php
    try {
    $db = new PDO(
        'mysql:host=localhost;dbname=cavvatelot;charset=utf8',
        'root',
        '',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    ); 
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV</title>
        <link rel="stylesheet" href="fichiers/les différentes pages/fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="fichiers/les différentes pages/fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="fichiers/images/logo.png">
    </head>
    <body>
        <header>
            <!-- La où seront les liens pour changer les différentes pages de notre site.-->
            <a href="index.php"><img src="fichiers/images/home_button.png" alt="home, accueil, homepage" width="50px" class="uwu"></a>
            <a href="index.php" class="li"><h1>Accueil</h1></a>
            <a href="fichiers/les différentes pages/fichier html/infos.php" class="lo"><h1>Plus d'infos</h1></a>
            <a href="fichiers/les différentes pages/fichier html/news.php"class="lo"><h1>Actualités</h1></a>
            <a href="fichiers/les différentes pages/fichier html/creations.php"class="lo"><h1>Nos créations</h1></a>
            <?php 
                session_start();
                if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"] == true) {
                    echo "<a href=\"fichiers/les différentes pages/fichier html/connexion.php\"><img src=\"fichiers/les différentes pages/fichier html/" . $_SESSION["user"]["profile_picture"] . "\" alt=\"profile picture\" width=\"50px\" class=\"uwu\"></a>";
                } else {
                    echo "<a href=\"fichiers/les différentes pages/fichier html/connexion.php\" class=\"lo\"><h1>Connexion</h1></a>";
                }
            ?>
        </header>
        <main>
            <h1 class="titre">Option Cinema Audio Visuel</h1>
            <p class="pute">
                Déjà, bonjour et bienvenu à toutes personnes tombant sur ce
                site plus ou moins par hasard. Ce site à été crée pour promouvoir notre 
                option cinéma car c'est pour notre projet de fin d'année de NSI. Je m'
                appelle Gabriel et, avec mon ami Aloïs on a décider de créer ce site car on 
                n'avait vraiment pas beaucoup d'idées.
            </p> 
            <p class="center"><img src="fichiers/images/photolycée.png" alt="photo de notre lycée. " width="80%"></p>
            <p class="pute">
                Alors voici la photo principale de la chaîne youtube de notre option. 
                Vous pouvez voir nos 5 dernière vidéos dans "nos creations".
            </p>
        </main>
        <footer>
            <!-- Tous ce qui est liens de type email / contactez nous etc...-->
            <div><img src="fichiers/images/vatelot.png" alt="photolycée" id="photolycée"></div>
            <div class="footi">
                <p>
                    Nous contacter:
                    <ul>
                        <li><a href="mailto:gabriel.comte2006@gmail.com">Gabriel</a></li>
                        <li><a href="mailto:alois.mc@hotmail.com">Aloïs</a></li>
                    </ul>
                </p>
            </div>
            <div class="footi">
                <p>
                    Chaîne youtube:
                    <ul>
                        <li><a href="https://www.youtube.com/channel/UC-HwennvrjpByhCshaQrCrA/videos"  target="_blank">option CAV</a></li>
                    </ul>
                </p>
            </div>
        </footer>
    </body>
</html>

<!--Les icônes viennent de https://www.flaticon.com -->
<!--Autres sources :-->
<!--Chaîne CAV : https://www.youtube.com/channel/UC-HwennvrjpByhCshaQrCrA/videos -->
<!--Site de l'école : https://www.jbvatelot.org -->
