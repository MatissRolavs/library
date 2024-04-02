<?php

require "Db.php";
$config = require("config.php");
$title = "Edit";

$db = new Db($config);

$query = "SELECT FROM books WHERE id = :id";
$params = [ ":id" => ""];
$book = $db->execute($query,$params);


require "views/book-edit.php";
