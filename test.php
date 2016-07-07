<!-- This is TEST page-->
<html>
<head>
    <meta charset="UTF-8">
    <title>
        php
    </title>
</head>
<body>

<?php
        echo "Hello, World";
        echo "<br />";
        $test = Date("d.m.y");
        echo "<br />";
        print "Еще один тест";
        echo "<br />";
        echo $test;
        echo $text= "Тело цикла";
            for($i=1;$i<10;$i++)
            {
                echo $text."</br>";
                echo "";
            };
        if (isset($i)) echo "Существует"."</br>";
        else echo "Не существует"."</br>";
        unset($i);
        if (isset($i)) echo "Существует"."</br>";
        else echo "Не существует"."</br>";
        print "nobody";
        $slot = 123;
        $abc ="slot";
        echo "<br />";
        echo $abc;
        echo "<br />";
        /** @var TYPE_NAME $abc */
        echo "=".$$abc;
        echo "<br />";
        echo PHP_VERSION;
        echo "<br />";
        echo PHP_OS;
        define("const_line","line");
        echo const_line;
//        array
        echo "<br />";
        $exam_array = array('a'=>'1','b'=> '2','c'=>3);
        print_r($exam_array);
        echo "<br />";
        var_dump($exam_array);
        echo "<br />";
        var_export($exam_array);
        ?>
<p>Дальше еще интересней</p><br />
<?php echo $exam_array;
print_r($exam_array);
echo "<br />";
var_dump($exam_array);
echo "<br />";
var_export($exam_array);
?>

<?php $a = 5; if ($a == 5): ?>
    A равно 5
<?php endif; ?><br>
Your browser <?=$_SERVER['HTTP_USER_AGENT'];?><br>
Your IP-adress <?=$_SERVER['REMOTE_ADDR'];?><br>
<p>Test</p>
<?php
$f[] = 20;
$f[] = 30;
$f[] = 40;
$f[] = 50;
echo $f;
echo "<br />";
$sum=0;
for($l=0;$l<=4; $l++)
{
   echo $f[$l]."<br>";
    $sum += $f[$l];
}
echo "<br />";
echo $sum;
?>
<form action="alt.php">
Первое поле<input type="text" name=Arr[]/> 
Второе поле<input type="text" name=Arr[]/>
Еще одно поле <textarea name=Arr[] id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Enter"/>
</form>
<?php
 print_r($GLOBALS);
?>
</body>
</html>