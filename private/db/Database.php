<?php

namespace App;

use PDO;

class Database
{
    private $PDO;

    public function __construct()
    {
        include 'connect.php';
        $this->PDO = $PDO;
    }

    public function addPost($post)
    {
        $str = "INSERT INTO post (post) VALUES (:post)";
        $stmt = $this->PDO->prepare($str);
        $stmt->bindParam(':post', $post);
        $stmt->execute();
    }

    public function updatePost($id, $post)
    {
        $str = "UPDATE post SET post = :post WHERE id = :id";
        $stmt = $this->PDO->prepare($str);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':post', $post);
        $stmt->execute();
    }

    public function deletePost($id)
    {
        $stmt = $this->PDO->prepare("DELETE FROM post WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function getAllPosts()
    {
        return $this->PDO->query("SELECT post, id FROM post ORDER BY id DESC");
    }

    public function getPosts($limit)
    {
        return $this->PDO->query("SELECT post FROM post ORDER BY id DESC LIMIT $limit");
    }
}
