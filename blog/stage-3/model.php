<?php
// model.php
function open_database_connection()
{
    //TODO: connect to the database and return the link object
    $server = "blog";
    $username = "root";
    $password = "root";
    $dbname = "blog";
    
    $link = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    
    return $link;
}

function close_database_connection($link)
{
    //TODO: close database connection
    $link = null;
}

function get_all_posts()
{
    //TODO: fetch all posts from the db and close the database connection.
    $link = open_database_connection();
    $result = $link->query('SELECT * FROM post');
    
    $i = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC)):
        $posts[$i] = $row;
        $i++;
    endwhile;

    close_database_connection($link);

    return $posts;
}

function get_post($id)
{
    //TODO: fetch a post by id from the db and close the database connection.
    $link = open_database_connection();

    $result = $link->prepare('SELECT * FROM post 
    WHERE id = :id');
    $result->bindParam(':id', $id);
    $result->execute();

    $post = $result->fetch(PDO::FETCH_ASSOC);

    close_database_connection($link);
    
    return $post;
}
