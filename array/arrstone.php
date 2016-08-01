<?php
echo "<pre>";
$as = "qwiyeio";
$fg = "fgh";
$ui = "to89";
//$list = array("fg32434"=>"adsaas","hj2323"=>"klhjkl");
$A = compact("as","fg",$list);
print_r($A);
print($A);
$aaa = array_push($A,"sel");
print_r($A);
array_pop($A);
print_r($A);
$newvar = array_unshift($A,23);
echo "$newvar";
print_r($A);
$vol = array_shift($A);
print_r($A);
echo "$vol";
echo "</pre>";
?>