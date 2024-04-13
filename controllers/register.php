<?php
require "Db.php";
$config = require("config.php");
$db = new Db($config);


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO users (username, password) VALUES (:username, :password);";
    $params = [":username" => $_POST["username"],
                ":password" => $_POST["password"]];
    $db->execute($query,$params);
}



$title = "Register";
require "views/register.view.php";