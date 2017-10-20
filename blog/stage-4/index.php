<?php
// index.php

require_once 'model.php';

$posts = get_all_posts();//TODO: call the function to get all posts

// include the HTML presentation code
require 'templates/list.tpl.php';
