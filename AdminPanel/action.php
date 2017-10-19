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
                margin: auto auto;
            }
        </style>
    </head>
    <body>
        <div id="display">
        <?php
            echo "Name = ". $_REQUEST['name']; 
            echo "<br>";
            echo "" ."Email : " . $_REQUEST['email'] . "<br>comment = " . $_REQUEST['comment'];

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
    $stmt = $conn->prepare("INSERT INTO test1 (name, email, comment) 
    VALUES (:name, :email, :comment)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':comment', $comment);

    // insert a row
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $comment = $_REQUEST['comment'];
    $stmt->execute();


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