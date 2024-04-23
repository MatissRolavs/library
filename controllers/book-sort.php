<?php
auth();
require "Db.php";
$config = require("config.php");

$db = new Db($config);

$query = "SELECT * FROM books WHERE author_id = :author_id;";
$params = [":author_id" => $_POST["author"]];
$books = $db->execute($query,$params)->fetchAll();

$query = "SELECT * FROM authors";
$authors = $db->execute($query,[])->fetchAll();

$title = "Books";
require "views/books.view.php";