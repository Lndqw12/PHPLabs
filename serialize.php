<meta charset="UTF-8">
<?php
 $A = array("index_a"=>"text",array(),"index_b"=>"890");
$ser= serialize($A);
print_r($ser);
echo "<br/>";
print_r("$ser");
echo "<br/>";
$nesarr = array(23,45,87);
$alt = serialize($nesarr);
echo "$alt";
echo "---------------<br/>";
$moto = unserialize($alt);

print_r($moto);
echo "<br/>";
?>