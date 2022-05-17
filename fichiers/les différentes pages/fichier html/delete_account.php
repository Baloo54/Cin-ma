<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | compte supprimé</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <?php
            $sqlQuery = "DELETE FROM users WHERE user_id = :id";
            $deleteAccount = $db->prepare($sqlQuery);
            $deleteAccount->execute([
                "id" => $_SESSION["user"]['user_id']
            ]);
            session_destroy();
        ?>
        <p class="pute">Votre compte a bien été supprimé. </p>
        <?php include("footer.php"); ?>
    </body>
</html>
