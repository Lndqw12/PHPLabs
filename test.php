<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.07.2016
 * Time: 8:37
 */

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
<?php endif; ?>
<p>Test</p>
