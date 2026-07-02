<?php 

include "Database.php";
include "trait/Notification.php";

class Product extends Database {
    use Notification;
     public function add($product){
        echo "Added A $product";
        $this->send();
    }
}

$product = new Product();
$product->add("Car");