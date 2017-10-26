<?php
// controllers.php

function list_action()
{
    $posts = get_all_posts();//TODO: get all posts
    require 'templates/list.tpl.php';
}

function show_action($id)
{
    $post = get_post($id);//TODO: get post by id
    require 'templates/show.tpl.php';
}

function register() 
{
    include 'templates/register.tpl.php';
}

function login() {
    //include 'templates/login.tpl.php';
    header('Location: http://blog/stage-5/index.php/Login');
    
    $t = 1;
}

function loginTemplate() 
{
    include 'templates/login.tpl.php';
}

 function RegisterUser($name,$email, $password) 
 {
     adduser($name,$email, $password);
 }

 function LoginUser($name, $password) {
     $val = checkUser($name, $password);
     return $val;
 }

 function logout() {

    //destroy session variables
    session_destroy();
    login();
}

function LoginAction($name, $password) {

    $login = checkUser($name, $password);
    
        if(!empty($login)) {
            $_SESSION['user_id'] = $login['id'];
            $_SESSION['username'] = $login['username'];
            //if login show posts
            list_action();
        }
        else
        {
            login();
        }
}