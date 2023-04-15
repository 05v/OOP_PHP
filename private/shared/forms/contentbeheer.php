<?php
$posts = $contentManager->getAllPosts();
?>
<!doctypehtml>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <title>ADMIN PORTAL</title>
        <script src="../public/media/javascript/dd3de96bc3.js"></script>
        <link href="../../public/media/style/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            CMS Contentbeheer - ADMIN PORTAL
            <ul>
                <li><a href="../index.php">HOME</a></li>
            </ul>
        </header>
        <main class="cmsAdmin">
            <div class="subscribe">
                <h1>Voeg een post toe</h1>
                <form action="contentbeheer.php" method="post">
                    <input id="post" name="post" placeholder="Post" required>
                    <input class="submit" type="submit" name="submit" value="Upload Post">
                </form>
            </div>
            <h2>All posts</h2>
            <p><b>IF YOU DELETE A POST YOU CAN'T UNDO IT<br>RELOAD THE WEBSITE AFTER EDITING OR UPLOADING A POST</b></p>
            <div class="deleteCMS">
                <?php
        foreach ($posts as $row) {
            echo '<form method="post" action="contentbeheer.php" class="deleteForm">
                    <input type="hidden" name="id" value="' . $row['id'] . '">
                    <input type="submit" name="delete" value="Delete">
                    <input type="submit" name="edit" value="Edit">
                    <p class="postTextCMS">' . $row['post'] . '</p>';
            if (isset($_POST['edit']) && $_POST['id'] == $row['id']) {
                echo '<form method="post" action="contentbeheer.php">
                        <textarea name="post" rows="5" cols="30">' . $row['post'] . '</textarea>
                        <input type="hidden" name="id" value="' . $row['id'] . '">
                        <input type="submit" name="update" value="Update">
                      </form>';
            }
            echo '</form>';
        }
        ?>
            </div>
        </main>
    </body>

    </html>