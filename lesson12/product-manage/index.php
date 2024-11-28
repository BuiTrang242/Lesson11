<?php 
require "model/DBConnection.php";
require "model/ProductDB.php";
require "model/Product.php";
require "controller/ProductController.php";
use Controller\ProductController;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="navbar navbar-default">
            <a href="index.php" class="navbar-brand">Quản lý sản phẩm</a>

        </div>
        <?php
        $productController = new ProductController();
        $page = isset($_GET['page']) ? $_GET['page'] : NULL;
        switch ($page) {
            case 'add':
                $productController->add();
                break;
            case 'edit':
                $productController->edit();
                break;
            case 'delete':
                $productController->delete();
                break;
            case 'find':
                $productController->findByName();
                break;
            case 'view':
                $productController->viewDetail();
                break;
            default:
                $productController->index();
                break;
        }
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>