<?php
require_once '../../private/autoload.php';

use App\ContentManager;

$contentManager = new ContentManager();
$contentManager->handleForm();
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
        <?php include_once FORMS_PATH . '/contentbeheer.php'; ?>
    </body>

    </html>