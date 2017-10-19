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
    $stmt = $conn->prepare("INSERT INTO test (name, address, age) 
    VALUES (:name, :address, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':age', $age);

    // insert a row
    $name = "Glen";
    $address = "trissur";
    $age = "32";
    $stmt->execute();

    // insert another row
    $name = "hari";
    $address = "Kannur";
    $age = "22";
    $stmt->execute();

    // insert another row
    $name = "jithin";
    $address = "ley";
    $age = "22";
    $stmt->execute();

    echo "New records created successfully";
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?>