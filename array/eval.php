<meta charset="UTF-8">
<?php
//printf("uniqid(): %s\r\n", uniqid("oiouiouo"));
$squarers = array();
//for ($i=0;$i<=10;$i++){
    $id = uniqid("F");
$txt = "OK";
$st = "function $id() { echo $txt; }";
    echo $st;
    echo "<br/>";
    eval($st);
    $squarers[] = $id;
//}
$squarers[0]();

?>