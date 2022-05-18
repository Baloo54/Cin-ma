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
        <form method="post" action="submit_edit_news.php" enctype="multipart/form-data">
            <p>
                <label for="title">Titre :</label>
                <input type="text" name="title" id="title" value="<?php echo $_POST["title"] ?>">
            </p>
            <p>
                <label for="content">Contenu : </label>
                <textarea name="content" id="content"><?php echo $_POST["content"]; ?></textarea>
                <input type="hidden" name="id" id="id" value="<?php echo $_POST["id"] ?>">
            <p>
                <button type="submit">Envoyer</button>
            </p>
        </form>
        <?php include("footer.php"); ?>
    </body>
</html>
