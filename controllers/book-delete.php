<?php
auth();
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    
    $query = "DELETE FROM borrowed_books WHERE book_id = :id";
    $params = [ ":id" => $_POST["id"]];
    $db->execute($query,$params);


    $query = "DELETE FROM books WHERE id = :id";
    $params = [ ":id" => $_POST["id"]];
    $db->execute($query,$params);
}

header("Location: /");
die();