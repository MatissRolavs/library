<?php
require "functions.php";
require "Db.php";
$config = require("config.php");

$db = new Db($config);
$query = "SELECT * FROM borrowed_books WHERE user_id = :user_id";
$params = [":user_id" => $_SESSION["userID"]];
$books = $db->execute($query,$params)->fetchAll();

$title = "Borrowed books";
require "views/borrowed-books.view.php";
