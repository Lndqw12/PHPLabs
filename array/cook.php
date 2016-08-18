<meta charset="UTF-8">
<?php
$counter = isset($_COOKIE['counter'])?$_COOKIE['counter']: 0;
$counter++;
setcookie("counter",$counter,0x7FFFFFFF);
echo "Вы запустили этот сценарий $counter раз";
$str = "sullivan = paul&namwsp[roy]=noni&names[read]=tom";
pares_str($str,$out);
echo "<pre>";
print_r($out);
echo "</pre>";

?>