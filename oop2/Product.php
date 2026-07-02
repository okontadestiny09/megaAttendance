<?php
include("BasicOperation.php");
include("Database.php");
class Product extends Database{
    protected string $table = "products";
    protected array $fillable = ["title", "price", "description"];
     function __construct()
    {
        parent::__construct();
    }
   use BasicOperation, Notification;
}

$coke = new Product();
$coke->add("spirte", "400", "very sweet",);