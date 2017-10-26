<?php
// index.php
session_start();
// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

if(isset($_SESSION['id'])) {
    header('Location: http://blog/stage-5/index.ph/Login');
}

// route the request internally
//TODO: Get request path from php super global $_SERVER 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/stage-5/' == $uri) {
    //TODO: list action
    list_action();
    //login();
} 
elseif ('/stage-5/index.php/Login' == $uri) {
    
    //show login template
    loginTemplate();
}
elseif ('/stage-5/index.php/show' == $uri && isset($_GET['id'])) {
    //TODO: show action
    show_action($_GET['id']);
} elseif ('/stage-5/index.php/register' == $uri) {
    //TODO: resgister
    register();
    
} elseif ('/stage-5/index.php/register_action' == $uri) {
    //TODO: resgister
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    RegisterUser($name,$email, $password);
   // addUser($name,$email, $password);
   
    //list_action();
    login();
}
elseif ('/stage-5/index.php/login_action' == $uri) {
    //TODO: resgister
    $name = $_POST['name'];
    
    $password = $_POST['password'];
    
    LoginAction($name, $password);
    
}
elseif ('/stage-5/index.php/logout' == $uri) {
    
    //logout
    logout();
}
else {
    //TODO: page not found message with proper http header.
    include 'templates/pagenotfound.php';
}
