<?php
require "Db.php";
$config = require("config.php");
$db = new Db($config);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "SELECT * FROM users WHERE username = :username AND password = :password";
    $params = [":username" => $_POST["username"],
                ":password" => $_POST["password"]];
    
    $result = $db->execute($query,$params)->fetch();
    if($result){
        $_SESSION["user"] = true;
        $_SESSION["username"] = $_POST["username"];
        header("Location: /");

    }
    else{
        header("Location: /register");
    }
    die();
}



$title = "Login";
require "views/login.view.php";