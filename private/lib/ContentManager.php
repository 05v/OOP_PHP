<?php

namespace App;

use App\Database;

class ContentManager
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function handleForm()
    {
        if (isset($_POST['delete'])) {
            $this->deletePost($_POST['id']);
        }

        if (isset($_POST['update'])) {
            $this->updatePost($_POST['id'], $_POST['post']);
        }

        if (isset($_POST['submit'])) {
            $this->addPost($_POST['post']);
        }
    }

    public function addPost($post)
    {
        $this->db->addPost($post);
    }

    public function updatePost($id, $post)
    {
        $this->db->updatePost($id, $post);
    }

    public function deletePost($id)
    {
        $this->db->deletePost($id);
    }

    public function getAllPosts()
    {
        return $this->db->getAllPosts();
    }
}
