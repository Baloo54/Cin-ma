<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | article créé</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <?php
            $sqlQuery = "INSERT INTO articles (title, author, author_id, author_picture, content, creation_date) VALUES (:title, :author, :author_id, :author_picture, :content, NOW())";
            $insertNews = $db->prepare($sqlQuery);
            $insertNews->execute([
                'title' => $_POST['title'],
                'author' => $_SESSION["user"]['firstname'] . " " . $_SESSION["user"]['name'],
                'author_id' => $_SESSION["user"]['user_id'],
                'author_picture' => $_SESSION["user"]['profile_picture'],
                'content' => $_POST['content']
            ]);
        ?>
        <?php include("footer.php"); ?>
    </body>
</html>
