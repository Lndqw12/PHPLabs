<meta charset="UTF-8">
<?php
echo str_repeat("Test",3); // function str_repeat
$one = 1;
$zero = 0;
echo "<br/>";
if ($zero == "") echo true; // выводит 1
echo "<br/>";
if ($one=="1") echo true; // выходит строка 1 равнот числу 1, вот так да!
echo "<br/>";
if ($zero==20) { echo 222;}
else {echo 333;};
echo str_repeat("<br/>",3);
$a = 3;
$b = 4;
if ($a > $b) {
    echo "a больше, чем b";
} else {
    echo "a НЕ больше, чем b";
}
echo str_repeat("<br/>",2);
if ($zero=="70")
{
    echo "yes";
}
else
{
    echo "no";
}
?>
