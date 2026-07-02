<?php

include "Database.php";
include "traits/Notification.php";

class Product extends Database {
    use Notification;

    public function addProduct($name, $price) {
        if (empty($name)) {
            echo "Product name is required";
            return;
        }

        if (!is_numeric($price) || $price <= 0) {
            echo "Valid price is required";
            return;
        }

        $this->products[] = [
            'name' => $name,
            'price' => $price
        ];

        echo "Adding product: $name";
        $this->create($name);
        $this->send();
    }

    public function editProduct($name, $price) {
        echo "Editing product: $name with price $price";
        $this->update($name);
    }

    public function removeProduct($name) {
        echo "Removing product: $name";
        $this->delete($name);
    }
}
