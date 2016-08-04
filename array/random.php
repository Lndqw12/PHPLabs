<?php
echo "<pre>";
mt_srand(123);
for($i=0;$i<5;$i++)
    echo mt_rand()." ";
echo "<br>";
mt_srand(123);
for($i=0;$i<5;$i++)
    echo mt_rand()." ";
echo "<br>";
echo sqrt(-1);
echo "<br>";
echo pow(0,-1);
echo "<br>";
echo var_dump(1/0);
echo "</pre>"
?>