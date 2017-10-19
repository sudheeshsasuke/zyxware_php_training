<?php
// index.php
$link = new PDO("mysql:host=phpmyadmin.training;dbname=PDO", 'root', 'root');
$link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if(!empty($_GET['id'])) {
    $id = $_GET['id'];
    // set the PDO error mode to exception
   
        // prepare sql and bind parameters
        $stmt = $link->prepare("DELETE FROM test1 WHERE id = :id");
        $stmt->bindParam(':id', $id);
    
        // insert a row
        $stmt->execute();

        //redirect
       // header('Location: http://training.local/show.php');
}
$result = $link->query('SELECT * FROM test1');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of DATA</title>
        <style>
            body {
                background: black;
                color: black;
            }
            #display {
                border: 3px solid red;
                background: cyan;
                width: 400px;
                padding: 30px;
                margin: 0 auto;
            }
            table {
                border: 2px solid red;
            }
            td,th {
                border: 1px solid green;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <div id="display">
            <h1>List of Data</h1>
            <table>
                <thead>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>comment</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </thead>
                <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
                <tbody>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['name'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['comment'] ?></td>
                        
                        <td><a href="/show.php?id=<?= $row['id'] ?>"><img alt='delete' 
                        src="https://cdn3.iconfinder.com/data/icons/softwaredemo/PNG/256x256/Close_Box_Red.png" width=32px />
                        </a>
                        </td>
                        <td>
                            <a href="edit.php?id=<?php print $row['id']; ?>">
                                <button>edit</button>
                            </a>
                        </td>
                    </tr>
                </tbody>
                <?php endwhile ?>
            </table>
        </div>
    </body>
</html>

<?php
$link = null;
?>