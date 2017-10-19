<!DOCTYPE HTML>
<html>  
    <head>
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

        <form action="http://training.local/action.php" method="post"  onsubmit="return Validate()">
        <br><br>
        Name:<input type="text" name="name" id="input_name"><br><br>
        E-mail:<input type="email" name="email"><br><br>
        Comment:<br><textarea rows="5" name="comment"></textarea>
        <br><br>
        <input type="submit" value="send">
        </form>

    </body>
</html>