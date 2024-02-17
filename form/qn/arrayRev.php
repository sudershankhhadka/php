<?php
//WAP to create an array and reverse the array content




// Create an array
$originalArray = array(1, 2, 3, 4, 5);

// Display the original array
echo "Original Array: ";
printArray($originalArray);

// Reverse the array
$reversedArray = array_reverse($originalArray);

// Display the reversed array
echo "Reversed Array: ";
printArray($reversedArray);

// Function to print an array
function printArray($arr) {
    
    foreach ($arr as $value) {
        echo " $value";
    }
    
}

?>
