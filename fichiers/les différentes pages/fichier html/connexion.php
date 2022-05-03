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
        <form method="get" action="submit_connexion.php">
            <p>
                <input type="text" name="name" id="name" placeholder="Nom">
                <input type="text" name="firstname" id="firstname" placeholder="Prénom">
            </p>
            <p>
                <input type="email" name="email" id="email" placeholder="E-mail">
                <input type="password" name="password" id="password" placeholder="Mot de passe">
            </p>
            <p>
                <button type="submit">Envoyer</button>
            </p>
        </form>
        <?php include("footer.php"); ?>
    </body>
</html>
