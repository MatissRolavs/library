<?php
auth();
require "Db.php";
$config = require("config.php");

$db = new Db($config);
$query = "SELECT * FROM borrowed_books WHERE user_id = :user_id";
$params = [":user_id" => $_SESSION["userID"]];
$books = $db->execute($query,$params)->fetchAll();

$query = "SELECT * FROM authors";
$authors = $db->execute($query,[])->fetchAll();

$title = "Borrowed books";
require "views/borrowed-books.view.php";
