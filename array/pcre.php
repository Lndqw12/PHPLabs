<meta charset="UTF-8">
<?php
preg_match('/(\d+)/s',"articl_123.html", $pockets);
echo $pockets[1];
echo "<br/>";
preg_match('/(\S+)@([a-z0-9.]+)/is',"Привет от somebody@mail.ru", $p);
echo "В тексте найдено = $p[1], хост - $p[2]";
echo "<br/>";
$text = "Привет от somebody@mail.ru, а также от other@mail.ru";
$html = preg_replace(
    '/(\S+)@([a-z0-9.]+)/is',
    '<a href = "mailto:$0>$0</a>',
    $text
);
echo $html;
?>