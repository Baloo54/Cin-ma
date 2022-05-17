<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | connecté</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <?php
            ?>
            <?php
                $sqlQuery = "SELECT * FROM users WHERE email = :email AND password = :password";  // On récupère le nom de l'utilisateur
                
                $userStatement = $db->prepare($sqlQuery);  // On prépare la requête
                $userStatement->execute(['email' => $_POST['email2'], 'password' => $_POST['password2']]);  // On exécute la requête
                // ⚠ Le paramètre passé dans execute doit toujours être un tableau ⚠
                $user = $userStatement->fetch();  // On récupère le résultat de la requête
                if ($user == NULL) {
                    echo "<p class=\"pute\">E-mail ou mot de passse incorrect. </p>";
                } else {
                    echo "<p class=\"pute\">Bonjour " . $user["firstname"] . " " . $user["name"] . ". </p>";
                    $_SESSION["isConnected"] = true;
                    $_SESSION["user"] = $user;
                }
            ?>
        </p>
        <?php include("footer.php"); ?>
    </body>
</html>