<?php
require "Db.php";
$config = require("config.php");

$params = [];

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO users (username, password) VALUES (:username, :password);";
}



$title = "Register";
require "views/register.view.php";