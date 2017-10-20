<?php
// index.php

// load and initialize any global libraries
require_once 'model.php';
require_once 'controllers.php';

// route the request internally
//TODO: Get request path from php super global $_SERVER 
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/stage-5/' == $uri) {
    //TODO: list action
    list_action();
} elseif ('/stage-5/index.php/show' == $uri && isset($_GET['id'])) {
    //TODO: show action
    show_action($_GET['id']);
} else {
    //TODO: page not found message with proper http header.
    include 'templates/pagenotfound.php';
}
