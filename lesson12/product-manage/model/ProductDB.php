<?php
namespace Model;

class ProductDB {
    public $connection;

    public function __construct($connection) {
        $this->connection = $connection;
    }
    public function create($product) {
        $sql = "INSERT INTO `products` (`name`, `price`, `description`, `manufacturer`) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->description);
        $statement->bindParam(4, $product->manufacturer);
        return $statement->execute();
    }
    public function getAll() {
        $sql = "SELECT * FROM products";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products =[];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['manufacturer']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }
    public function get($id) {
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result = $statement->fetch();
        $product = new Product($result['name'], $result['price'], $result['description'], $result['manufacturer']);
        $product->id = $result['id'];
        return $product;
    }
    public function update($id, $product) {
        $sql = "UPDATE `products` SET `name` = ?, `price` = ?, `description` = ?, `manufacturer` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->name);
        $statement->bindParam(2, $product->price);
        $statement->bindParam(3, $product->description);
        $statement->bindParam(4, $product->manufacturer);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }
    public function delete($id) {
        $sql = "DELETE FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function findByName($name) {
        $sql = "SELECT * FROM products WHERE name LIKE ?";
        $statement = $this->connection->prepare($sql);
        $likeName = "%" . $name . "%";
        $statement->bindParam(1, $likeName);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['name'], $row['price'], $row['description'], $row['manufacturer']);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }
}