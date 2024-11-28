<?php 
namespace Controller;
use Model\Product;
use Model\ProductDB;
use Model\DBConnection;

class ProductController {
    public $productDB;
    public function __construct() {
        $connection = new DBConnection('mysql:host=localhost;dbname=product_management;charset=utf8', 'root', '');
        $this->productDB = new ProductDB($connection->connect());
    }
    public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            include 'view/add.php';
    }else {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];
        $manufacturer = $_POST['manufacturer'];
        
        if (empty($name)) {
            $message = 'Name cannot be empty';
            include 'view/add.php';
            return;
        }

        $product = new Product($name, $price, $description, $manufacturer);
        $this->productDB->create($product);
        $message = 'Product added successfully';
        header('Location: index.php?page=list');
    }
}

    public function index(){
        $products = $this->productDB->getAll();
        include 'view/list.php';
    }
    public function edit(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/edit.php';
        }else {
            $id = $_POST['id'];
            $product =new Product($_POST['name'], $_POST['price'], $_POST['description'], $_POST['manufacturer']);
            $this->productDB->update($id,$product);
            $message = 'Product updated successfully';
            header('Location: index.php');
}   
    }

    public function delete(){
        if($_SERVER['REQUEST_METHOD'] === 'GET'){
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/delete.php';
        }else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    public function findByName() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $products = $this->productDB->findByName($name);
            include 'view/list.php';
        } else {
            include 'view/find.php';
        }
    }

    public function viewDetail() {
        $id = $_GET['id'];
        $product = $this->productDB->get($id);
        include 'view/detail.php';
    }
    
}