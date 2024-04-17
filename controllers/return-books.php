<?php
require "functions.php";
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "SELECT * FROM borrowed_books WHERE id = :id";
    $params = [ ":id" => $_POST["id"]];
    $borrowed_book= $db->execute($query,$params)->fetch();

    $query = "SELECT * FROM books WHERE id = :id";
    $params = [ ":id" => $borrowed_book["book_id"]];
    $book= $db->execute($query,$params)->fetch();

    $availableCount = $book["available"];
    
    
        $availableCount = $availableCount + 1;
        $query = "UPDATE books
                SET available = :available
                WHERE id = :id";
        $params = [
            ":available" => $availableCount,
            ":id" => $borrowed_book["book_id"],
        ];
        $db->execute($query,$params);

        $query = "DELETE FROM borrowed_books WHERE id = :id ";
        $params = [ ":id" => $_POST["id"]];
        $db->execute($query,$params);
    
    header("Location: /borrowed-books");
    die();
}
