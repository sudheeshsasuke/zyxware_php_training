<?php
// show.php

require_once 'model.php';

//TODO: get the url paramerter id - show.php?id=123
$id = $_GET['id'];
$post = get_post($id);//TODO call the function to get a post by id

// include the HTML presentation code
require 'templates/show.tpl.php';

?>