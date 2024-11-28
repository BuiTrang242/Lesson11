<?php
namespace Controller;

use Model\Blog;
use Model\BlogDB;
use Model\DBConnection;

class BlogController {
    private $blogDB;

    public function __construct() {
        $connection = new DBConnection('mysql:host=localhost;dbname=blog_management', 'root', '');
        $this->blogDB = new BlogDB($connection->connection);
    }

    public function index() {
        $blogs = $this->blogDB->getAll();
        include 'view/list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $title = $_POST['title'];
            $teaser = $_POST['teaser'];
            $content = $_POST['content'];
            $created = $_POST['created'];
            $blog = new Blog($title, $teaser, $content, $created);
            $this->blogDB->create($blog);
            header('Location: index.php');
        }
    }

    public function edit() {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $blog = $this->blogDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $blog = new Blog($_POST['title'], $_POST['teaser'], $_POST['content'], $_POST['created']);
            $this->blogDB->update($id, $blog);
            header('Location: index.php');
        }
    }

    public function delete() {
        $id = $_GET['id'];
        $this->blogDB->delete($id);
        header('Location: index.php');
    }

    public function view() {
        $id = $_GET['id'];
        $blog = $this->blogDB->get($id);
        include 'view/detail.php';
    }
}
?>
