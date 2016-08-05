<meta charset="UTF-8">
<?php
$ph = $_SERVER['DOCUMENT_ROOT'];
echo "$ph";
$file = "txt.php";
echo "<br />";
echo "$file";
$fstyl = "rt";
//$f = fopen($file,$fstyl) or die("Error");
$f = fopen($file,"rb") or die("Error1");

echo "-------------------------------------<br/>";
//function mHex($input){
//    for($i=0;$i<strlen($input);$i++)
//        $hex[] = sprintf("%20X",ord($input[$i]));
//    return join(" ",$hex);
//}
//echo mHex(fgets($f,100));

$result = fread($f,500);
echo "<br />";
echo $result;
$fnew = fopen("txt2.php","w");
//$result=$result;
fwrite($fnew,$result);
fclose($fnew);
fclose($f);
include 'txt2.php';
?>