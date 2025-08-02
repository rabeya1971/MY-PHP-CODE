<?php
// class Product {
//     public $name;
//     public $price;

//     function productInfo() {
    
//     }
// }

// $product1 = new Product();
// $product1->name = "MObile\n";
// echo $product1->name;
// $product1->price = 20000;
// echo $product1->price;


class Product {
    public $name;
    private $price;

    public function productInfo() {
        echo $this->price = 20000;
    }
}

$product1 = new Product();
$product1->name = "MObile\n";
echo $product1->name;
$product1->productInfo();