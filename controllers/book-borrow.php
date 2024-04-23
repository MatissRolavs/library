<?php
auth();
require "Db.php";
$config = require("config.php");

$db = new Db($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "SELECT * FROM books WHERE id = :id";
    $params = [ ":id" => $_POST["id"]];
    $book= $db->execute($query,$params)->fetch();

    $availableCount = $book["available"];
    
    if($availableCount > 0){
        $availableCount = $availableCount - 1;
        $query = "UPDATE books
                SET available = :available
                WHERE id = :id";
        $params = [
            ":available" => $availableCount,
            ":id" => $_POST["id"],
        ];
        $db->execute($query,$params);

        $query = "INSERT INTO borrowed_books (name, user_id, book_id, author_id, published) VALUES (:name, :user_id, :book_id, :author_id, :published) ";
        $params = [ ":name" => $book["title"],":user_id" => $_SESSION["userID"], ":book_id" => $book["id"], ":author_id" => $book["author_id"], ":published" => $book["published"]];
        $db->execute($query,$params);
    }

    header("Location: /");
    die();
}
