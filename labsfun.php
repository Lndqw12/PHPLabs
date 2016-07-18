<meta charset="UTF-8">
<?php
function myecho(){
    for($i=0;$i<func_num_args();$i++) {
        echo func_get_arg($i)."<br>\n";
    }
}
 myecho("asd","asdgha","weiuy","weiweoi");
for($e=0;$e<20;$e++)
echo "--";
echo "<br/>";

function myecho2(){
    foreach (func_get_args() as $k){
        echo "$k<br>\n";
    }
}
myecho2("asdasdada","asdghasdasda","wewreiuy","wei3434weoi");

for($e=0;$e<20;$e++)
    echo "--";
echo "<br/>";

$f= 20;
function localVar(){
    global  $f;  // сюда пишем что обращение идет к глобальной переменной
    echo "$f<br/>";
    return $f;
}
echo "$f";
echo localVar();
for($e=0;$e<20;$e++)
    echo "--";
echo "<br/>";
//$GLOBALS - использование глобального массива номерайия с 1 !!!
function globFunArray(){
    return $GLOBALS["f"]; // нужно обратить внимание что имя переменной баз $  и в кавычках

}

echo "Последний<br/>";
echo globFunArray();
print("<br/>");
print("--------------------");
$test= 77;
function dlop(){
    global $test;
    echo "$test";
}
$r = 99;
function dlop2(){
    $r= $GLOBALS["test"];
    echo $r;
    unset($r);
    $r = 34;
    echo $r;
}
print("<br/>");

dlop();
print("<br/>");

dlop2();
print("<br/>");

function deler(){
    unset($GLOBALS["test"]);
    echo $fg;
}
deler();
print("---------------");
echo "$test";
$as= 23;
function dum1(){
    global $as; // тут меняься содержимое глобальное переменной, ибо это ссылка а не компия
    $as = 45;
    echo $as;
}
print("---------------<br/>");
 dum1();
echo "$as<br/>";
// следующий эксперемент через глобальную функцию переменыых
$df = 67;
function dum2(){
    $qqq = &$GLOBALS['df'];
//    $qqq = 200;
    echo $qqq;
    global $df;
    unset($df); // то есть мы удаляем только ссылку
}
echo "<br/>";
dum2(); // 200
echo $df; // 67почему??? да потому что через ссылку из функции произвели перезапись переменной новым
// значением

unset($df);
$df = 21;
echo $df;
?>
