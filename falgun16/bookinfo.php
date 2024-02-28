<html>
    <title>Book information</title>
    <body>
        
    <form action="" method = "post">
        Name: <input type="text" name="booktitle" id=""> </br>

        ID:     <input type="number" name="" id=""></br>
        Author:  <input type="text" name="" id=""></br>
        Price: <input type="number" name="" id=""></br>
        <input type="button" value="submit" name = "btnsubmit">
    </form>
    </body>
    <?php
        // echo   $var1=$_POST ['booktitle'];

        if(isset($_POST['btnSubmit'])==='POST'){
            echo $var1 = $_POST['booktitle'];
        }
        include "header.php"
        require "header.php"
    ?>



</html>