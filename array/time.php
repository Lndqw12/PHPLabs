<meta charset="UTF-8">
<?php
define("START_TIME",microtime(true));
$ltime = time();
echo $ltime;// с 1 января 1970 года
echo "<br/>";
$mtime = microtime();
echo $mtime;
echo "<br/>";
for($i=0;$i<1000;$i++)
    $i++;
printf("Время работы скрипта %.5f c",microtime(true)-START_TIME );
?>