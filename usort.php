<?php
echo "<pre>";
$logog = array(
    "1asd"=>"one",
    "2asd"=>"two",
    "3wer"=>"three",
    "4ry"=>"four",
    "5erty"=>"five"
);
print_r($logog);
$listone = array_keys($logog);
    print_r($listone);
$nlist = array_values($logog);
    print_r($nlist);
$newflip = array_flip($logog);
print_r($newflip);
$result_array = array_merge($newflip,$nlist, $listone);
print_r($result_array);
echo "</pre>";
?>