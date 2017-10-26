<?php

require_once 'model.php';

$name = $_POST['name'];

$password = $_POST['password'];

checkUser($name, $password);

//redirect to index page
//header('Location:' , "index.php");


