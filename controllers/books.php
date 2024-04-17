<?php
require "functions.php";
require "Db.php";
if($_SESSION["user"] == false){
    header("Location: /login");
}
$config = require("config.php");

$query = "SELECT * FROM books";

$db = new Db($config);
$books = $db->execute($query,[])->fetchAll();

$title = "Books";
require "views/books.view.php";