<?php
$a = array();
$a[0] = 21;
$a[1] = 23;
$a[2] = 25;
//unset($a);
$a[] = "example";
$a[] = "example3";
$a[] = "example4";
$a[] = "example5";
for ($i=0;$i<=count($a);$i++){
    echo $a[$i]."<br />";
}
echo count($a);
?>