<?php
auth();
require "Db.php";

$config = require("config.php");

$query = "SELECT * FROM books";

$db = new Db($config);
$books = $db->execute($query,[])->fetchAll();

$title = "Books";
require "views/books.view.php";