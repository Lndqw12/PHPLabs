<?php
echo "<pre>";
$logog = array(
    "1"=>"one",
    "2"=>"two",
    "3"=>"three",
    "4"=>"four",
    "5"=>"five"
);
print_r($logog);
$newflip = array_flip($logog);
print_r($newflip);
echo "</pre>";
?>