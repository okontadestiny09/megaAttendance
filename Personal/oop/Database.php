<?php

class Database {
   public function find(){
        echo "Finding A Product";
    }
    public function add($product){
        echo "Added $product using Database Class";
    }
    public function edit(){
        echo "Editing A Product";
    }

    public function delete(){
        echo "Deleting A Product";
    } 
}
