<!DOCTYPE html>
<html>
<head>
    <title>Display Page</title>
</head>
<body>

<h2>Submitted Values (New Page)</h2>

<?php
$name = $_GET['name'];
$email = $_GET['email'];

echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
?>

</body>
</html>