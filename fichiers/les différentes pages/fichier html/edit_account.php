<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | plus d'infos</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <h1>Modifier vos informations :</h1>
        <form method="post" action="submit_edit_account.php" enctype="multipart/form-data">
            <p>
                <label for="name">Nom :</label>
                <input type="text" name="name" id="name" value="<?php echo $_SESSION["user"]["name"]; ?>">
                <label for="firstname">Prénom :</label>
                <input type="text" name="firstname" id="firstname" value="<?php echo $_SESSION["user"]["firstname"]; ?>">
            </p>
            <p>
                <label for="email">E-mail :</label>
                <input type="email" name="email" id="email" value="<?php echo $_SESSION["user"]["email"]; ?>">
                <label for="password">Mot de passe :</label>
                <input type="password" name="password" id="password" value="<?php echo $_SESSION["user"]["password"]; ?>">
            </p>
            <p>
                <label for="pictureFile">Photo de profil :</label><br>
                <input type="file" name="pictureFile" id="pictureFile" value="<?php echo $_SESSION["user"]["profile_picture"]; ?>">
            </p>
            <p>
                <button type="submit">Envoyer</button>
        </form>
        <form method="post" action="connexion.php">
            <button type="submit">Annuler</button>
        </form>
        <?php 
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>"; include("footer.php"); ?>
    </body>
</html>
