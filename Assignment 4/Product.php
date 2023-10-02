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

    public function getFormattedPrice($price){
        return strval(number_format($price,2));
    }

    public function showDetails(){
        echo "ID: ". $this->id . "\n";
        echo "Name: ". $this->name . PHP_EOL;
        $prices = $this->getFormattedPrice($this->price);
        echo "Price: ". $this->price;

        // return gettype($this->name);
    }
}


// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();

// $abc = $product->showDetails();
// echo $abc;

?>