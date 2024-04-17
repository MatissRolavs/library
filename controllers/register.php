<?php
require "Db.php";
require "Validator.php";
$config = require("config.php");
$db = new Db($config);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $errors = [];
    if(!Validator::string($_POST["username"],min:6)){
        $errors["username"] = "Username must be atleast 6 characters";
    }
    if(!Validator::string($_POST["password"],min:6)){
        $errors["password"] = "Password must be atleast 6 characters";
    }
    $query = "SELECT * FROM users WHERE username = :username;";
    $params = [":username" => $_POST["username"]];
    $result = $db->execute($query,$params)->fetch();
    if($result){
        $errors["username"] = "Account with this username already exists";
    }
    if(empty($errors)){
    $params = [];
    $query = "INSERT INTO users (username, password) VALUES (:username, :password);";
    $params = [":username" => $_POST["username"],
                ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT)];
    $db->execute($query,$params);
    header("Location: /login");
    die();
    }
}



$title = "Register";
require "views/register.view.php";