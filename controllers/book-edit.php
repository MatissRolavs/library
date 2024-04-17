<?php
require "functions.php";
require "Db.php";
$config = require("config.php");
$db = new Db($config);

$query = "SELECT * FROM books WHERE id = :id";
$params = [":id" => $_GET["id"]];

$book = $db->execute($query,$params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];

//   if (!Validator::string($_POST["name"], min: 2, max: 50)) {
//     $errors["title"] = "Name cannot be less than 2 or more than 50 chars";
//   }
//   if (!Validator::int($_POST["calories"], min: 0)) {
//     $errors["calories"] = "Calories count invalid";
//   }
if (empty($errors)) {
    $query = "UPDATE books
              SET title = :title, author = :author, published = :published, available = :available
              WHERE id = :id";
    $params = [
        ":title" => $_POST["title"],
        ":author" => $_POST["author"],
        ":published" => $_POST["published"],
        ":available" => $_POST["available"],
        ":id" => $_POST["id"],
    ];
    $db->execute($query, $params);

    header("Location: /");
    die();
  }

  
}

$title = "Edit Book";
require "views/book-edit.view.php";
