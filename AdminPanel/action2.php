<!doctype html>
<html>
    <head>
        <style>
            body {
                background: black;
                color: black;
            }
            #display {
                border: 3px solid red;
                background: orange;
                width: 200px;
                padding: 20px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div id="display">
        <?php
            echo "Name = ". $_REQUEST['name']; 
            echo "<br>";
            echo "" ."Email : " . $_REQUEST['email'] . "<br>comment = " . $_REQUEST['comment'];
            echo "<br>";
        ?>
        <a href="show.php">
            <button type="button">SHOW DATA</button>
        </a>
        <!--adding values to database-->
        <?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "PDO";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE test1 
        SET name = :name, email = :email, comment = :comment
        WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':id', $id);
    // insert a row
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $id = $_REQUEST['id'];
    $stmt->execute();

    header('Location: http://training.local/show.php');
    echo "<br><br>Successfull!";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>
        </body>
</html>