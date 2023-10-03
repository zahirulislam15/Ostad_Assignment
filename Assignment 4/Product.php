<?php

class Product {
    public $id;
    public $name;
    public $price;
    
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    

    public function getFormattedPrice($p){
        $price1 = number_format($p,2);
        return $price1; 
    }

    public function showDetails(){
        echo "ID: ". $this->id . "\n";
        echo "Name: ". $this->name . PHP_EOL;
        $prices = $this->getFormattedPrice($this->price);
        printf("Price: %.2f", $prices);

    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();


?>