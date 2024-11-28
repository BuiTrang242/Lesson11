<?php 
namespace Model;

class Product {
    public $id;
    public $name;
    public $price;
    public $description;
    public $manufacturer;

    public function __construct($name, $price, $description, $manufacturer) {
       
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->manufacturer = $manufacturer;
    }
}