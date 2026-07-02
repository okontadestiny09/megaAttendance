<?php
include("BasicOperation.php");
include("Notification.php");
include("Database.php");

class User extends Database{
    protected string $table = "users";
    protected array $fillable = ["name", "email", "password"];

    function __construct()
    {
        parent::__construct();
    }

    use BasicOperation, Notification;
}

$peter = new User();
$added = $peter->add("harry111", "harry@gmail.come", "22222");


if ($added) {
    $peter->notify("Successfully");
}
else {
    $peter->notify("Failed to add user");
}