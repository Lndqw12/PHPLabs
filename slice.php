<?php
echo "<pre>";
//$input =array(
//    "a",
//    "b",
//    "c",
//    "d",
//    "e"
//);

//$output = array_slice($input,2);
//print_r($output);
//$output = array_slice($input,2,-1);
//print_r($output);
//$output = array_slice($input,2,1);
//print_r($output);
//$output = array_slice($input,-2,1);
//print_r($output);
//$output = array_slice($input,0,3);
//print_r($output);

$coloros = array(
    "red",
    "blue",
    "green",
    "pink",
    "black"
);

$rlist = array_splice($coloros,2);
print_r($rlist);
array_splice($coloros,0,5, array("fast"));
print_r($coloros);
$rlist1 = array_splice($coloros,3,1,"fast");
print_r($rlist1);
$input2 = array("red", "green", "blue", "yellow");
array_splice($input2, 3, 0, "purple");
print_r($input2);


$array = array("two", "five", "one", "three", "four");
array_splice($array, 1, 2, array("seven", "eight", "nine"));
print_r($array);
echo "</pre>";
?>