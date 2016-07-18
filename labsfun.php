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

?>
