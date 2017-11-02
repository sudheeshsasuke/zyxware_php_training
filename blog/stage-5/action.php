<?php

require_once 'model.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

addUser($name,$email, $password);

//redirect to index page
//header('Location:' , "index.php");


