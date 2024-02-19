<?php

$var1 = 12;
$var2 = 13;
$temp;

$temp = $var1;
$var1 = $var2;
$var2 = $temp;

echo  $var1, $var2;
//ok


?>