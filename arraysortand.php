<?php
$arrayrest = array("asd","fgh","34g","tvx");
sort($arrayrest);
echo "<br/>";
echo "<pre>";
print_r($arrayrest);
rsort($arrayrest);
echo "<br/>";
print_r($arrayrest);
$newA = array(
    "as"=>"asdf",
    "12"=>"3245",
    "h"=>"-----",
    "="=>"+++++",

);

sort($newA);
echo "<pre>";
print_r($newA);
echo "<br/>";
rsort($newA);
print_r($newA);
?>