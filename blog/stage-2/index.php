<?php
// index.php

//  TODO: connect to database and fetch all id and title from post table as an
// array 'posts' with each post as an array of id and title with keys 'id'
// and 'title'.
// use mysqli functions.
$server = "blog";
$username = "root";
$password = "root";
$dbname = "blog";

$link = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
$result = $link->query('SELECT id, title FROM post');

$posts = array();
$i = 0;
while($row = $result->fetch(PDO::FETCH_ASSOC)):
    $posts[$i] = $row;
    $i++;
endwhile;

//  TODO: close database connection.
$link = null;

//  TODO: include the HTML template in templates/list.tpl.php using 'require'.
require('templates/list.tpl.php');
?>