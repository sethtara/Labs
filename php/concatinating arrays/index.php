<!DOCTYPE html>
<html>
<body>

<?php
function length($ar){
    return count($ar);
}
function concat($arr1,$arr2){
    for($i=0;$i<length($arr2);$i++){
        $arr1[length($arr1)+$i]=$arr2[$i];
    }
    return $arr1;
}

$a1=array("red","green",4);
$a2=array("blue");
print_r(concat($a1,$a2));
echo"<br>";
?>