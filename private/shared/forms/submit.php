<?php

include '../../../private/path.php';
include '../../db/connect.php';


$str = "INSERT INTO post (post)
        VALUES ('{$_POST['post']}')";

$result = $PDO->query($str);

$result = $PDO->query(
    "SELECT post FROM post ORDER BY id DESC"
);

header("Location: ../../../public/adminbeheer/contentbeheer.php");
exit;