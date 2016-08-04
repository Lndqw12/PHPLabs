<?php
$ph = $_SERVER['DOCUMENT_ROOT'];
echo "$ph";
$file = "$ph"."/"."random.php";
echo "<br />";
echo "$file";
$fstyl = "rt";
//$f = fopen($file,$fstyl) or die("Error");
$f1 = fopen("random.php","rt") or die("Error1");
echo "<pre>";


echo "</pre>";
?>