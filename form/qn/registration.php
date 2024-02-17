<?php
//write a program to display the student Registration page and place  the 2 submit button which should display the inputted value in same and different page respectively




?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    <input type="submit" name="submit_same_page" value="Submit (Same Page)">
    <input type="submit" name="submit_new_page" value="Submit (New Page)">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (isset($_POST['submit_same_page'])) {
        echo "<h3>Submitted Values (Same Page):</h3>";
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
    }

    if (isset($_POST['submit_new_page'])) {
        // Redirect to a new page with the submitted values
        header("Location: display_page.php?name=$name&email=$email");
        exit();
    }
}
?>

</body>
</html>