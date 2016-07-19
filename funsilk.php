<meta charset="UTF-8">
<?php
function A($i) {echo "Вызвана A($i)\n";}
function B($i) {echo "Вызвана B($i)\n";}
function C($i) {echo "Вызвана C($i)\n";}
$F="A";
$H="B";
$F(304);
call_user_func($F,47);
call_user_func($H,532);
?>