<meta charset="UTF-8">
<?php
var_dump(arraynull());
echo "<br/>";
var_dump(setarray());
function setarray(){
   return $duble = array(2,6,7);
}
print_r(setarray());
list($a1,$a2,$a3) = setarray();
echo $a1,$a2,$a3;
echo "<br/>";
var_dump($a1);
// null array
function arraynull(){};
echo "<br/>";
var_dump(arraynull());
function sum($sedik, $ararat = "4"){
    $d= $sedik+$ararat;
    return $d;
}
print sum(2);
print sum(2,8);

function sd($y){
     return $y++;
    echo $y;
}

print (sd(10));
?>