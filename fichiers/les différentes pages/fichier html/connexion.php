<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | connexion</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <div id="forms">
            <div id="createAccount">
                <h1>Créer un compte :</h1>
                <form method="post" action="new_user.php" enctype="multipart/form-data">
                    <p>
                        <label for="name">Nom :</label>
                        <input type="text" name="name" id="name" placeholder="Nom">
                        <label for="firstname">Prénom :</label>
                        <input type="text" name="firstname" id="firstname" placeholder="Prénom">
                    </p>
                    <p>
                        <label for="email">E-mail :</label>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                        <label for="password">Mot de passe :</label>
                        <input type="password" name="password" id="password" placeholder="Mot de passe">
                    </p>
                    <p>
                        <label for="pictureFile">Photo de profil :</label><br>
                        <input type="file" name="pictureFile" id="pictureFile">
                    </p>
                    <p>
                        <button type="submit">Envoyer</button>
                    </p>
                </form>
            </div>
            <div id="login">
                <?php
                    if(isset($_SESSION["isConnected"]) && $_SESSION["isConnected"]) {
                        echo "<form id=\"logout\" method=\"post\" action=\"logout.php\">
                                <button type=\"submit\">Se déconnecter</button>
                            </form>";
                    } else {
                        echo "<h1>Se connecter :</h1>
                        <form method=\"post\" action=\"submit_connexion.php\" enctype=\"multipart/form-data\">
                            <p>
                                <label for=\"email2\">E-mail :</label>
                                <input type=\"email\" name=\"email2\" id=\"email2\" placeholder=\"E-mail\">
                            </p>
                            <p>
                                <label for=\"password2\">Mot de passe :</label>
                                <input type=\"password\" name=\"password2\" id=\"password2\" placeholder=\"Mot de passe\">
                            </p>
                            <p>
                                <button type=\"submit\">Envoyer</button>
                            </p>
                        </form>";
                    }
                ?>
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
