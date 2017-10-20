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
