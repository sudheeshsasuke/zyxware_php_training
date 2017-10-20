<?php
// index.php

// TODO: connect to database and fetch all id and title from post table.
// use mysqli functions.
$servername = '127.0.0.1';
$username = 'root';
$password = 'root';
$dbname = 'blog';

$link = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$result = $link->query('SELECT id, title FROM post');

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div id = "display">
            <h1>List of Posts</h1>
            <!-- TODO: loop through posts array and print all titles as link
            to the corresponding posts as unordered list.
            link path eg: /boot-camp/show.php?id=1 -->
            <?php while($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <ul>
                <li>
                    <a href = "show.php?id=<?= $row['id']?>">
                    <?=$row['title'];?>
                    </a>
                </li>
            </ul>
            <?php endwhile; ?>
        </div>
    </body>
</html>

<?php
// TODO: close database connection.
$link = null;
?>
