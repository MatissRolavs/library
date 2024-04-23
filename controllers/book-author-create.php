<?php
admin();
require "Db.php";
require "Validator.php";
$config = require("config.php");

$db = new Db($config);

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    if(!Validator::string($_POST["author"],min:1)){
        $errors["author"] = "Author cannot be empty";
    }

    if(empty($errors)){
    $query = "INSERT INTO authors (name) VALUES (:name);";
    
    $params = [
        ":name" => $_POST["author"]
    ];
    $db->execute($query,$params);

    header("Location: /create-book");

    die();
    }
}

$title = "Create books";
require "views/book-author-create.view.php";