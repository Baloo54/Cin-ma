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
            $sqlQuery = "INSERT INTO users (name, firstname, email, password, profile_picture) VALUES (:name, :firstname, :email, :password, :profile_picture)";
            $newUser = $db->prepare($sqlQuery);
            $newUser->execute([
                'name' => $_POST['name'],
                'firstname' => $_POST['firstname'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'profile_picture' => "../../uploads/" . $_FILES["pictureFile"]["name"]
            ]);
        ?>
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
        <?php include("footer.php"); ?>
    </body>
</html>
