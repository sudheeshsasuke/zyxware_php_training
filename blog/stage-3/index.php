<?php
// index.php

require_once 'model.php';

//TODO: call the function to get all posts
$posts = get_all_posts();

// include the HTML presentation code
require 'templates/list.tpl.php';
?>
