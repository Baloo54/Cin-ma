<?php
    try {
        $db = new PDO(
            'mysql:host=localhost;dbname=cavvatelot;charset=utf8',
            'root',
            '',
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
?>
<?php session_start(); ?>
<header>
            <a href="../../../"><img src="../../images/home_button.png" alt="home, accueil, homepage" width="50px" class="uwu"></a>
            <a href="../../../" class="lo"><h1>Accueil</h1></a>
            <a href="infos.php" class="lo"><h1>Plus d'infos</h1></a>
            <a href="news.php" class="lo"><h1>Actualités</h1></a>
            <a href="creations.php" class="lo"><h1>Nos créations</h1></a>
            <?php 
                if (isset($_SESSION["isConnected"]) && $_SESSION["isConnected"] == true) {
                        echo "<a href=\"connexion.php\" class=\"lo\"><img src=\"" . $_SESSION["user"]["profile_picture"] . "\" alt=\"profile picture\" width=\"50px\" class=\"uwu\"></a>";
                    } else {
                        echo "<a href=\"connexion.php\" class=\"lo\"><h1>Connexion</h1></a>";
                    }
            ?>
        </header>
