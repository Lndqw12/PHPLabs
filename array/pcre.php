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
$re = '/\\\\filename/';
echo "<br/>";
echo $re;
echo "<br/>";
echo "<tt>".htmlspecialchars($re)."</tt>";
echo "<br/>";
echo preg_replace('/at/','AT',"What is the Perl Compatible Regex?");
echo "<br/>";
$strdate = " 15-16/2000           ";
$res = '{
    ^\s*(
    (\d+)
        \s* [[:punct:]] \s*
        (\d+)
        \s* [[:punct:]] \s*
          (\d+)
          )\s*$
}xs';
preg_match($res,$strdate, $pock) or die ("Not a date: $strdate");
echo "Дата без пробелов: '$pock[1]'<br>";
echo "День:'$pock[2]'<br> ";
echo "Месяц:'$pock[3]'<br> ";
echo "Год:'$pock[4]'<br> ";
echo "<br/>";

?>