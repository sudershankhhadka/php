<?php

$details = array("RAM","KTM","BCA");
$details2= array("SHYAM "," BKT "  ,  "CSIT"  ,  "000");
foreach($details as $i){
    echo ($i."\n");
}

foreach($details as $key => $value){
    echo ($key."=".$value."\n");
}

foreach ($details2 as $key => $value){
    echo ($key."=".$value."\n");
}
?>