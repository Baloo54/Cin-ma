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
        <?php
            $sqlQuery = "UPDATE articles SET title = :title, content = :content WHERE article_id = :id";
            $modifiedArticle = $db->prepare($sqlQuery);
            $modifiedArticle->execute([
                "title" => $_POST["title"],
                "content" => $_POST["content"],
                "id" => $_POST["id"]
            ]);
        ?>
        <p class="pute">L'article a bien été modifié !</p>
        <?php include("footer.php"); ?>
    </body>
</html>
