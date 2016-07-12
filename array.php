<meta charset="UTF-8">
<?php

echo 'Текущая версия PHP: ' . phpversion();

$array_list = array(
    "start",
     "begin",
    "end"
);

list ( $start, $begin, $end) = $array_list;
echo $start, $begin, $end;
?>