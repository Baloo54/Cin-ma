<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Connecté</title>
    </head>
    <body>
        <?php
            if (
                isset($_GET["name"])
                && isset($_GET["firstname"])
                && isset($_GET["email"])
                && isset($_GET["password"])
                && filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)
                ) {
                    echo "<p>Bonjour " . $_GET["firstname"] . " " . $_GET["name"] . ". </p>";
                    echo "<p>Votre adresse e-mail est : " . $_GET["email"] . " et votre mot de passe est : " . $_GET["password"] . ". </p>";
                } else {
                    echo "Veuillez remplir tous les champs et utiliser une adresse e-mail valide. ";
                }
        ?>
    </body>
</html>