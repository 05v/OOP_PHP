<?php
require_once '../private/autoload.php';

use App\Database;

$db = new Database();
$result = $db->getPosts(6);
?>
<!doctypehtml>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width,initial-scale=1" name="viewport">
        <title>CONTENT BLOG</title>
        <link href="../public/media/style/style.css" rel="stylesheet" type="text/css">
    </head>

    <body>
        <header>
            CMS Contentbeheer
            <ul>
                <li><a href="adminbeheer/contentbeheer.php">ADMIN</a></li>
            </ul>
        </header>
        <main>
            <div class="intro">
                <h2>Welkom op mijn website</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni inventore vel et ducimus tenetur
                    repudiandae asperiores eaque consectetur? Maxime consequatur soluta pariatur modi. A quia sed cum
                    quasi, impedit est.</p>
            </div>
            <hr>
            <div class="posts">
                <h2>De 6 meest recente posts</h2>
                <p><?php foreach($result as $row){print('<p class="postText mainText">'.$row['post'].'</p>');}; ?></p>
            </div>
        </main>
        <hr>
        <footer>Vlad Verheij Copyright 2023</footer>
    </body>

    </html>