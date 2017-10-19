<?php
// index.php
$link = new PDO("mysql:host=phpmyadmin.training;dbname=COMPANY", 'root', 'root');

$result = $link->query('SELECT id, fname FROM employee');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Posts</title>
    </head>
    <body>
        <h1>List of Posts</h1>
        <ul>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <li>
                <a href="/index.php?id=<?= $row['id'] ?>">
                    <?= $row['fname'] ?>
                </a>
            </li>
            <?php endwhile ?>
        </ul>
    </body>
</html>

<?php
$link = null;
?>