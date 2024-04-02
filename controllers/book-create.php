<?php
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO books (title, author, published, available) VALUES (:title, :author, :published, :available);";

    $params = [
        ":title" => $_POST["title"],
        ":author" => $_POST["author"],
        ":published" => $_POST["published"],
        ":available" => $_POST["available"]
    ];
    $db->execute($query,$params);

    header("Location: /books");

    die();
}

$title = "Create books";
require "views/book-create.view.php";