<meta charset="UTF-8">
<?php
printf("uniqid(): %s\r\n", uniqid("oiouiouo"));
$squarers = array();
for ($i=0;$i<=10;$i++){
    $id = uniqid("F");
    eval(" function $id() { echo $i*$i; }");
    $squarers[] = $id;
}
$squarers[5];

?>