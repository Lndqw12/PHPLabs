<meta charset="UTF-8">
<?php
 $A = array("index_a"=>"text",array(),"index_b"=>"890");
$ser= serialize($A);
print_r($ser);
echo "<br/>";
print_r("$ser");
echo "<br/>";
?>