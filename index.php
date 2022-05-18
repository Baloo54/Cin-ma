<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV</title>
        <link rel="stylesheet" href="fichiers/les différentes pages/fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="fichiers/les différentes pages/fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <main>
            <p class="pute">
                <?php 
                    date_default_timezone_set("Europe/Paris"); // définit le fuseau horaire
                    echo "aujourd'hui nous sommes le " . date("d/m/Y") . " et il est " . date("H:i:s"); 
                    // indique la date et l'heure actuelle
                ?>
            </p>
            <p class="pute">
                <?php
                    $jean = ["Firstname" => "Jean", "Name" => "Dupont", "Age" => 25, "is admin" => true];
                    $celine = ["Firstname" => "Céline",  "Name" => "Martin", "Age" => 33, "is admin" => false];
                    $pierre = ["Firstname" => "Pierre", "Name" => "Masson", "Age" => 14, "is admin" => false];
                    $valerie = ["Firstname" => "Valérie", "Name" => "Parrish", "Age" => 45, "is admin" => false];
                    $users = [$jean, $celine, $pierre, $valerie];
                    if ($users[0]["Firstname"] != null and $users[0]["Name"] != null and $users[0]["Age"] != null) {
                    echo "<br>";
                    } else {
                        echo "Veuillez remplir tous les champs.";
                    }

                    if (array_key_exists("Prénom", $users[0])) {
                        echo $users[0]["Prénom"] . "<br>";
                    } else {
                        echo "Cette clé n'existe pas. <br>";
                    } // teste si la clé "Prénom" existe dans le tableau $users[0]

                    if (in_array("Jean", $users[0])) {
                        echo "Le prénom de Jean est présent dans le tableau. <br>";
                    } else {
                        echo "Le prénom de Jean n'est pas présent dans le tableau. <br>";
                    } // teste si le prénom "Jean" est présent dans le tableau $users[0]

                    $keyName = array_search("Jean", $users[0]);
                    echo "La clé de Jean est : \"" . $keyName . "\" <br>"; 
                    // affiche la clé de la valeur Jean dans $users[0]

                    $isAdult = ($users[0]["Age"] >= 18) ? "Tu es majeur" : "Tu es mineur";
                    // si l'age est supérieur ou égal à 18 attribue "Tu es majeur" sinon "Tu es mineur"
                    echo $isAdult . " " . $users[0]["Firstname"] . ". <br><br>";

                    $password = "qwerty";
                    if (strlen($password) >= 8) {
                        echo "Le mot de passe est assez long. <br>";
                    } else {
                        echo "Le mot de passe est trop court. <br>";
                    } // teste si le mot de passe est assez long

                    $importantInfo = "Ma bite est très longue";
                    $importantInfo = str_replace("bite", "jambe", $importantInfo);
                    echo $importantInfo . "<br>"; // remplace "bite" par "jambe" dans la variable $importantInfo

                    $userInfo = ["Prénom" => "Jean", "Nom" => "Dupont", "Age" => 25];
                    echo sprintf(
                        "%s | %s <br> %s | %s <br> %s | %s <br>",
                        "Prénom ",
                        $userInfo["Prénom"],
                        "Nom ",
                        $userInfo["Nom"],
                        "Age ",
                        $userInfo["Age"]
                    );
                    
                    echo "<br>";

                    function isUserAdmin($user) : bool {
                        if (array_key_exists("is admin", $user)) {
                            $isAdmin = $user["is admin"];
                        } else {
                            $isAdmin = false;
                        }
                        return $isAdmin;
                    }
                    
                    for ($i = 0; $i < count($users); $i++) {
                        if (isUserAdmin($users[$i])) {
                            echo "L'utilisateur " . $users[$i]["Firstname"] . " " . $users[$i]["Name"] . " est administrateur. <br>";
                        } else {
                            echo "L'utilisateur " . $users[$i]["Firstname"] . " " . $users[$i]["Name"] . " n'est pas administrateur. <br>";
                        }
                    }
                    echo "<br>";
                ?>
                <?php if (isset($_SESSION["name"])
                    && isset($_SESSION["firstname"])
                    && isset($_SESSION["email"])
                    && isset($_SESSION["password"])
                    ) {
                        echo "Bonjour ", $_SESSION["firstname"], " ", $_SESSION["name"], " ton adresse e-mail est : ", $_SESSION["email"], " et ton mot de passe est : ", $_SESSION["password"], ". ";
                    } else {
                        echo "Vous n'êtes pas connecté. <br>";
                    }
                ?>
                <?php foreach ($users as $user): ?>
                    <?php echo "Bonjour " . $user["Firstname"] . " " . $user["Name"] . " tu as " . $user["Age"] . " ans. <br>"; ?>
                <?php endforeach; ?>
            </p>
            <?php
                echo "<pre>";
                print_r($users);
                echo "</pre>";
                /* ⚠️ rappel : print_r encadré des balises <pre> permet d'afficher les informations 
                d'un tableau ⚠️ */
            ?>
            <h1 class="titre">Option Cinema Audio Visuel</h1>
            <p class="pute">
                Déjà, bonjour et bienvenu à toutes personnes tombant sur ce
                site plus ou moins par hasard. Ce site à été crée pour promouvoir notre 
                option cinéma car c'est pour notre projet de fin d'année de NSI. Je m'
                appelle Gabriel et, avec mon ami Aloïs on a décider de créer ce site car on 
                n'avait vraiment pas beaucoup d'idées.
            </p> 
            <p class="center"><img src="fichiers/images/photolycée.png" alt="photo de notre lycée. " width="80%"></p>
            <p class="pute">
                Alors voici la photo principale de la chaîne youtube de notre option. 
                Vous pouvez voir nos 5 dernière vidéos dans "nos creations".
            </p>
        </main>
        <footer>
            <!-- Tous ce qui est liens de type email / contactez nous etc...-->
            <div><img src="fichiers/images/vatelot.png" alt="photolycée" id="photolycée"></div>
            <div class="footi">
                <p>
                    Nous contacter:
                    <ul>
                        <li><a href="mailto:gabriel.comte2006@gmail.com">Gabriel</a></li>
                        <li><a href="mailto:alois.mc@hotmail.com">Aloïs</a></li>
                    </ul>
                </p>
            </div>
            <div class="footi">
                <p>
                    Chaîne youtube:
                    <ul>
                        <li><a href="https://www.youtube.com/channel/UC-HwennvrjpByhCshaQrCrA/videos"  target="_blank">option CAV</a></li>
                    </ul>
                </p>
            </div>
        </footer>
    </body>
</html>

<!--Les icônes viennent de https://www.flaticon.com -->
<!--Autres sources :-->
<!--Chaîne CAV : https://www.youtube.com/channel/UC-HwennvrjpByhCshaQrCrA/videos -->
<!--Site de l'école : https://www.jbvatelot.org -->
<!--Fait par Gabriel COMTE et Aloïs MASSON-CLAUDEZ -->