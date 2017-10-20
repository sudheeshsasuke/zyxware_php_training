<?php
// index.php

// TODO: connect to database 'blog'
// get the url parameter 'id'
// fetch title, date, author and body from post table for the corresponding
// id to a variable post as associative array with table fields as keys.
// use mysqli functions.
$server = "blog";
$username = "root";
$password = "root";
$dbname = "blog";

$id = $_GET['id'];

$link = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
$result = $link->prepare('SELECT * FROM post 
WHERE id = :id');

$result->bindParam(':id', $id);
$result->execute();

$post = $result->fetch(PDO::FETCH_ASSOC);

//  TODO: close database connection.
$link = null;
//  TODO: include the HTML template in templates/show.tpl.php using 'require'.
require('templates/show.tpl.php');
?>
