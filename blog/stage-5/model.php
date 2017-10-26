<?php
// model.php
function open_database_connection()
{
    //TODO: connect to the database and return the link object
    $server = 'blog';
    $dbname = 'blog';
    $username = 'root';
    $password = 'root';

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
    while($row = $result->fetch(PDO::FETCH_ASSOC)){
        $posts[] = $row;
    }

    close_database_connection($link);
    return $posts;
}

function get_post($id)
{
    //TODO: fetch a post by id from the db and close the database connection.
    $link = open_database_connection();
    $result = $link->prepare("SELECT * FROM post
    WHERE id = :id");
    $result->bindParam(':id', $id);
    $result->execute();
    $post = $result->fetch(PDO::FETCH_ASSOC);
    close_database_connection($link);
    return $post;
}

//adding data to user database table
function addUser($name, $email, $password)
{
    $link = open_database_connection();

    $result = $link->prepare("INSERT INTO users(username, email, password) VALUES(:name, :email, :password)");
    $result->bindParam(':name',$name); 
    $result->bindParam(':email',$email); 
    $result->bindParam(':password',sha1($password));
   // $password = sha1($password);
    $result->execute();
}

//checking user with user database table
function checkUser($name, $password)
{
    $link = open_database_connection();

    $password = sha1($password);
    
    $result = $link->prepare("SELECT * FROM `users` WHERE username = :name AND password = :password");
    $result->bindParam(':name',$name); 
    $result->bindParam(':password', $password);
    
    //debug
    $t = $result->execute();
    $row = $result->fetch(PDO::FETCH_ASSOC);
    
    if($password === $row['password']) {
        return $row;
    } else {
        return NULL;
    }
}