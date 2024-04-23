<?php
admin();
require "Db.php";
require "Validator.php";
$config = require("config.php");
$db = new Db($config);

$query = "SELECT * FROM books WHERE id = :id";
$params = [":id" => $_GET["id"]];

$book = $db->execute($query,$params)->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $errors = [];
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

if (empty($errors)) {
    $query = "UPDATE books
              SET title = :title, author = :author, published = :published, available = :available
              WHERE id = :id";
    $params = [
        ":title" => $_POST["title"],
        ":author" => $_POST["author"],
        ":published" => $formattedDate,
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
