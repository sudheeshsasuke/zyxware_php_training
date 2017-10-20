<?php
// index.php

// TODO: get the url parameter 'id'
// connect to database and fetch title, date, author and body from
// post table for the corresponding id.
// use mysqli functions.
$id = $_GET['id'];

$servername = '127.0.0.1';
$username = 'root';
$password = 'root';
$dbname = 'blog';

$link = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$result = $link->prepare('SELECT * FROM post WHERE id = :id');
$result->bindParam(':id', $id);
$result->execute();
$row = $result->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            <?= $row['title']?>
        </title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div id="display">
            <h1><!-- TODO: print title -->
                <?= $row['title']?>
            </h1>
            <div id="date"><!-- TODO: print date and author. eg: Jan 1 2014 by Webmaster-->
                <p>
                     <?php print date("M d Y", $row['date']);?> by <?= $row['author']?>
                </p>
            </div>
            <div><!-- TODO: print body-->
                <p><?= $row['body']?></p>
            </div>
        </div>
    </body>
</html>

<?php
// TODO: close database connection.
$link = null
?>
