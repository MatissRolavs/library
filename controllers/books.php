<?php
auth();
require "Db.php";
$config = require("config.php");

$db = new Db($config);

$query = "SELECT * FROM books";
$books = $db->execute($query,[])->fetchAll();

$query = "SELECT * FROM authors";
$authors = $db->execute($query,[])->fetchAll();

$title = "Books";
require "views/books.view.php";