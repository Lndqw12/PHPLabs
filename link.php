<meta charset="UTF-8">
<?php
$a = 300;
echo "<br/>";
echo $a;
echo "<br/>";
function &Linkeron(){
    global $a;
    return $a;    // возврат ссылки
}

$b = &Linkeron(); // теперь и b ссылается на те данные что и а
$b = 0;
echo $b;
echo "<br/>";
echo $a;
?>