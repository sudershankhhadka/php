<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- to display on the same page    ==> action="  " -->
    <form method = "post" action ="welcome.php">  
        Input your name: <input type ="text" name ="textname"> </br>
        Address: <input type="text" name="address" id="add">
        <br>
        Semester : <input type="text" name="sem" id="sem">
        <br>
        Faculty: <input type="text" name="faculty" id="faculty">
        <br>

        <input type="submit" name ="buttonsubmit">

    </form>
    <!-- if(SERVER['REQUEST)_METHOD']===POST){
    echo "Name is ".$_POST['textname'];
} -->
</body>

</html>