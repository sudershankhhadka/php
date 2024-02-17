<?php
//MEthdo 1  ==>to get html form field
echo $_POST['textname'];

$varName = $_POST['textname'];
echo "Your name is ".$varName;

//Method 2 ==> to get html form field
if(isset($_POST['buttonsubmit'])){
//this condition checks the specific submit button is clicked or not

$varName = $_POST['textname'];
echo "You have entered ".$varName;
}
?>