<?php
$doc = $_SERVER["DOCUMENT_ROOT"];
echo $doc;
echo "<br/>";
function FCamp($f1, $f2){
    if (is_dir($f1)&& !is_dir($f2)) return -1;
    if (!is_dir($f1)&& is_dir($f2)) return 1;
    if ($f1<$f2) return -1;
        elseif ($f1>$f2) return 1;
    else return 0;
}
$dir = $_SERVER["DOCUMENT_ROOT"];
$d = opendir($dir); // catalog
print_r($d);
echo "<br/>";
//closedir($dir);

while (false !== ($e=readdir($d)))
    $files[$e] = filesize($e);
uksort($files,"FCamp");
print_r($files);


?>