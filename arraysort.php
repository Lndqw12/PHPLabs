<?php
$tools = array(
    "a"=>"adsf",
    "b"=>"2434",
    "c"=>"popi",
    "d"=>"jhg"
);

asort($tools);
print_r($tools);
echo "<br/>";
echo $tools;
echo "<br/>";
print $tools;
arsort($tools);
echo "<br/>";
print_r($tools);
// other sort
// funtion ksort and krsort
echo "<br/>";
ksort($tools);
print_r($tools);
echo "<br/>";
krsort($tools);
print_r($tools);
?>