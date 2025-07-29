<?php
class Product {
    public $name;
    public $price;
    public $category;
    public $brand;
    public $stock;
    public $sku;

    public function showDetails() {
        echo "Name: $this->name, Price: $this->price";
    }
}

$product1 = new Product();
$product1->name = "Mobile";
$product1->price = "2000";
$product1->category = "Technology";
$product1->brand = "walton";
$product1->stock = "40";
$product1->sku = "Tech001";

echo $product1->name;

// $product1->showDetails();

$product2 = new Product();
$product2->name = "Laptop";
$product2->price = "8000";
$product2->category = "Technology";
$product2->brand = "walton";
$product2->stock = "20";
$product2->sku = "Tech002";

echo $product2->name;

// $product2->showDetails();

class Person {
    public $name;
    public $age;
    public $email;
    public $phone;
    public $address;
    public $occupation;

    public function showProfile() {
        echo "Name: $this->name\n Age: $this->age\n Email: $this->email\n Phone Number: $this->phone\n Current Address: $this->address\n";
    }
}

$person1 = new Person();
$person1->name = "Maisun";
$person1->age = "20";
$person1->email = "maisun21@gmail.com";
$person1->phone = "013000000000";
$person1->address = "Khulna";
$person1->occupation = "Developer";

// echo $person1->occupation = "Developer";
$person1->showProfile();




?> 