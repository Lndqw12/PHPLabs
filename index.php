<!-- I repeat PHP -->
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
        ?>
<p>Test</p>

</body>
</html>
