<?php
guest();
require "Db.php";
$config = require("config.php");
$db = new Db($config);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "SELECT * FROM users WHERE username = :username;";
    $params = [":username" => $_POST["username"]];
    $errors = [];
    $result = $db->execute($query,$params)->fetch();
    if(!$result || !password_verify($_POST["password"], $result["password"])){
        $errors["user"] = "Incorrect password or email";
    }
    if(empty($errors)){
        $_SESSION["user"] = true;
        $_SESSION["userID"] = $result["id"];
        $_SESSION["username"] = $_POST["username"];
        header("Location: /");
        die();
    }
    
}



$title = "Login";
require "views/login.view.php";