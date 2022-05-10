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
            if (
                isset($_POST["name"])
                && isset($_POST["firstname"])
                && isset($_POST["email"])
                && isset($_POST["password"])
                && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)
                ) {
                    echo "<p class='pute'>Bonjour " . strip_tags($_POST["firstname"]) . " " . strip_tags($_POST["name"]) . ". </p>";
                    echo "<p class='pute'>Votre adresse e-mail est : " . strip_tags($_POST["email"]) . " et votre mot de passe est : " . strip_tags($_POST["password"]) . ". </p>";
                } else {
                    echo "<p class='pute'>Veuillez remplir tous les champs et utiliser une adresse e-mail valide. </p>";
                }
        ?>
        <p class="pute">
            <?php
                if (isset($_FILES["pictureFile"]["type"]) && $_FILES["pictureFile"]["error"] == 0) {
                    if ($_FILES["pictureFile"]["size"] <= 1 * 10**6) {
                        $fileInfo = pathinfo($_FILES["pictureFile"]["name"]);
                        $fileType = $fileInfo["extension"];
                        $allowedType = ["png", "jpg", "jpeg", "gif"];

                        if (in_array($fileType, $allowedType)) {
                            echo "Tout est bon. <br>";
                            move_uploaded_file($_FILES["pictureFile"]["tmp_name"], "../../uploads/" . $_FILES["pictureFile"]["name"]);
                            echo "<img class=\"pute\" src=\"../../uploads/" . $_FILES["pictureFile"]["name"] . "\" alt=\"photo de profil\">";
                        } else {
                            echo "Veuillez envoyer uniquement des images au format png, jpg, jpeg ou gif. ";
                        }
                    } else {
                        echo "Le fichier est trop volumineux (supérieur à 1 Mo). ";
                    }
                } else {
                    echo "Veuillez insérer une photo de profil. ";
                }
            ?>
        </p>
        <?php include("footer.php"); ?>
    </body>
</html>