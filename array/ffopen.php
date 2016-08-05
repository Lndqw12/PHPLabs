<meta charset="UTF-8">
<?php
$ph = $_SERVER['DOCUMENT_ROOT'];
echo "$ph";
$file = "random.php";
echo "<br />";
echo "$file";
$fstyl = "rt";
//$f = fopen($file,$fstyl) or die("Error");
$f = fopen($file,"rt") or die("Error1");
echo "<br />";
echo is_array($f) ? 'Массив' : 'Не массив';
echo "<br />";
echo is_object($f) ? 'Объект' : 'Не объект';
echo "<br />";
echo is_string($f) ? 'Строка' : 'Не строка';
echo "<br />";
echo "-------------------------------------<br/>";
function mHex($input){
    for($i=0;$i<strlen($input);$i++)
        $hex[] = sprintf("%20X",ord($input[$i]));
    return join(" ",$hex);
}
echo mHex(fgets($f,100));


?>