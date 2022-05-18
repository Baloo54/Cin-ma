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
        <?php include("header.php"); ?>
        <main>
            <p class="pute">
                <?php 
                    date_default_timezone_set("Europe/Paris"); // définit le fuseau horaire
                    echo "aujourd'hui nous sommes le " . date("d/m/Y") . " et il est " . date("H:i:s"); 
                    // indique la date et l'heure actuelle
                ?>
            </p>
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
<!--Fait par Gabriel COMTE et Aloïs MASSON-CLAUDEZ -->