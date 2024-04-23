<?php
admin();
require "Db.php";
require "Validator.php";
$config = require("config.php");

$db = new Db($config);

$query = "SELECT * FROM authors";
$authors = $db->execute($query,[])->fetchAll();
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    if(!Validator::string($_POST["title"],min:1)){
        $errors["title"] = "Title cannot be empty";
    }
    if(!Validator::string($_POST["author"],min:1)){
        $errors["author"] = "Author cannot be empty";
    }
    if(!Validator::string($_POST["title"],min:1)){
        $errors["title"] = "Title cannot be empty";
    }
    if(!Validator::number($_POST["available"],min:1)){
        $errors["available"] = "Available must be a number";
    }
    $formattedDate = date("Y-m-d", strtotime($_POST["published"]));

    
    if(empty($errors)){
    
    $query = "INSERT INTO books (title, author_id, published, available) VALUES (:title, :author_id, :published, :available);";
    $params = [
        ":title" => $_POST["title"],
        ":author_id" => $_POST["author"],
        ":published" => $formattedDate,
        ":available" => $_POST["available"]
    ];
    $db->execute($query,$params);

    header("Location: /");

    die();
    }
}

$title = "Create books";
require "views/book-create.view.php";