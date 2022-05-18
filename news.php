<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Option CAV | actualités</title>
        <link rel="stylesheet" href="../fichier css/styles.css">
        <link rel="stylesheet" media="screen and (max-width: 500px)" href="../fichier css/phone_styles.css">
        <link rel="icon" type="image/png" href="../../../fichiers/images/logo.png">
    </head>
    <body>
        <?php include("header.php"); ?>
        <p class="pute">
            <?php
                if (isset($_SESSION['isConnected']) && $_SESSION['isConnected']) {
                    echo "<form method=\"post\" action=\"submit_news.php\">
                            <p>
                                <label for=\"title\">Titre : </label>
                                <input type=\"text\" id=\"title\" name=\"title\" placeholder=\"Titre\">
                            </p>
                            <p>
                                <label for=\"content\">Contenu : </label>
                                <textarea id=\"content\" name=\"content\" placeholder=\"Placez ici le contenu de l'article. \"></textarea>
                            </p>
                            <p>
                                <input type=\"submit\" value=\"Nouvel article\" />
                            </p>
                        </form>";
                } else {
                    echo "Vous devez vous connecter pour pouvoir poster un article. ";
                }
            ?>
            <?php
                $sqlQuery = "SELECT * FROM articles ORDER BY creation_date DESC";
                $getNews = $db->prepare($sqlQuery);
                $getNews->execute();
                $news = $getNews->fetchAll();
                foreach ($news as $article) {
                    $article["creation_date"] = explode("-", $article["creation_date"]);
                    $article["creation_date"] = $article["creation_date"][2] . "/" . $article["creation_date"][1] . "/" . $article["creation_date"][0];
                    $article["content"] = nl2br($article["content"]);
                    echo "<div class=\"article\">
                        <h1><img width=\"50px\" src=\"" . $article["author_picture"] . "\" alt=\"author profile picture\">       " . htmlspecialchars($article['title']) . "</h1>
                            <p class=\"pute\">" . htmlspecialchars($article['content']) . "</p>
                            <p>Publié le " . $article['creation_date'] . " par " . htmlspecialchars($article['author']) . "</p>
                        </div>";
                        if (isset($_SESSION["user"]["user_id"]) && $_SESSION["user"]["user_id"] == $article['author_id']) {
                            echo "<p><form method=\"post\" action=\"delete_news.php\">
                                    <input type=\"hidden\" name=\"id\" value=\"" . $article['article_id'] . "\">
                                    <input type=\"hidden\" name=\"title\" value=\"" . $article['title'] . "\">
                                    <input type=\"hidden\" name=\"content\" value=\"" . $article['content'] . "\">
                                    <input type=\"submit\" value=\"Supprimer l'article\">
                                </form></p>";
                            echo "<p><form method=\"post\" action=\"edit_news.php\">
                                    <input type=\"hidden\" name=\"id\" value=\"" . $article['article_id'] . "\">
                                    <input type=\"hidden\" name=\"title\" value=\"" . $article['title'] . "\">
                                    <input type=\"hidden\" name=\"content\" value=\"" . $article['content'] . "\">
                                    <input type=\"submit\" value=\"Modifier l'article\">
                                </form></p>";
                        } else {
                            echo "";
                        }
                }
            ?>
        </p>
        <?php include("footer.php"); ?>
    </body>
</html>
