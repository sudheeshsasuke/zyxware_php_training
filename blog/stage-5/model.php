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
    $password = sha1($password);
    $result = $link->prepare("INSERT INTO `users`
    (`username`, `email`, `password`, `image_path`) 
    VALUES (:name, :email, :password, :path)");
    $result->bindParam(':name',$name); 
    $result->bindParam(':email',$email); 
    $result->bindParam(':password',$password);
    $result->bindParam(':path', $_SESSION['taget_image_path']);
    
   // $password = sha1($password);
    $t = $result->execute();

    //set image name
    $_SESSION['image_name'] = $link->lastInsertId();
    close_database_connection($link);
    return $t;
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
    close_database_connection($link);
    if($password === $row['password']) {
        return $row;
    } else {
        return NULL;
    }
}

//GetImageName()
// i.e fetch the last inserted id and add one to it
//it will be the image name
function GetImageName() {
    /*
    $link = open_database_connection();
    $result = $link->query('SELECT MAX(id) AS lastId FROM `users`');
    $row = $result->fetch(PDO::FETCH_ASSOC);
    $name = $row['lastId'];
    $name += 1;
    */
    return $_SESSION['image_name'];
}

//update image path
function UpdateUser($name, $password) {
    $link = open_database_connection();
    $password = sha1($password);
    $result = $link->prepare("UPDATE `users` SET `image_path`=:val 
    WHERE `username`=:user AND `password`=:pass");
    $result->bindParam(':val', $_SESSION['taget_image_path']);
    $result->bindParam(':user', $name);
    $result->bindParam(':pass', $password);

    $t = $result->execute();
    close_database_connection($link);
}