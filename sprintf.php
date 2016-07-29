<meta charset="UTF-8">
<?php
$num1 = 24.78;
$num = 44.97;
$space = "<br/>";
echo $space;
echo $num;
echo $space;
echo $num1;
echo $space;
echo $space;
echo sprintf("%x",$num);
echo $space;
echo sprintf("%X",$num1);
$example_txt = "ajksdgajksdgh
asdasdasd
123123123
sgsdgsdfgsdfg";

echo nl2br($example_txt);
echo "<br/>";
// This is still one basic function
$strone = "textq iowefjqwefqw eiofwqef
qwewe qweqwety 45g dffffffth 45545ssdf dfgdfg dytyeer rererre
qeqwer 3434 565656
asdf sdfg sdfgsd sdfgsd sdfgsd sdfg sdfgsdfgsd s sdfgsdgfdsfg";
$wint = 30;
$br = "<br />\n";
$reulstr = wordwrap($strone,$wint,$br );
echo $reulstr;

// still one expample
// function strip_tags

$strtag = "
<b>Ведутся технические работы</b>
";
echo "<br/>";
echo $strtag;
$deltag = strip_tags($strtag);
echo "<br/>"."$deltag";

?>
