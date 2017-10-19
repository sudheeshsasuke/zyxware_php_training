<!DOCTYPE HTML>
<html>  
    <head>
    <style>
            body {
                background: cyan;
                color: black;
            }
            #display {
                border: 3px solid red;
                background: orange;
                width: 200px;
                padding: 30px;
                margin: 0 auto;
            }
        </style>
        <script>
            function Validate() {
                var input = document.getElementById("input_name").value;
                if(input === '') {
                    alert("form is empty");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <div id="display">
            <?php 
                $id = $_GET['id'];

                //link with database
                $link = new PDO("mysql:host=phpmyadmin.training;dbname=PDO", 'root', 'root');

                //prepare statement
                $result = $link->prepare('SELECT * FROM test1
                WHERE id = :id');

                //binding $variables  with :placeholders
                $result->bindParam(':id', $id);

                //executing
                $result->execute();

                //fetching the data
                $row = $result->fetch(PDO::FETCH_ASSOC);

            ?>
            <form action="http://training.local/action2.php?id=<?php print $id; ?>" method="post"  onsubmit="return Validate()">
                <br><br>
                Name:<input type="text" name="name" id="input_name" value="<?php print $row['name'];?>"><br><br>
                E-mail:<input type="email" name="email" value="<?php print $row['email'];?>"><br><br>
                Comment:<br><textarea rows="5" name="comment"><?php print $row['comment'];?></textarea>
                <br><br>
                <input type="submit" value="send">
            </form>
        </div>
    </body>
</html>