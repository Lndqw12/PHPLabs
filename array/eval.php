<meta charset="UTF-8">
<?php
//printf("uniqid(): %s\r\n", uniqid("oiouiouo"));
$squarers = array();
//for ($i=0;$i<=10;$i++){
    $id = uniqid("d");
    $txt = "OK";
    $st = "function $id() { echo $txt; }";
    echo $st;
    echo "<br/>";
    eval($st);
    $squarers[] = $id;
//}
$squarers[0]();
echo "<br/>";

for ($k=0;$k<=10;$k++){
    echo uniqid("$k");
    echo "<br/>";
}
echo "<br/>";
$mul = create_function('$a,$b','return $a*$b;');
$neg = create_function('$a','return -$a;');
echo $mul(10,20)."<br>";
echo $neg(2)."<br>";
?>