<meta charset="UTF-8">
<?php
$space = "<br/>";

echo $space;
print "text";
echo $space;
echo htmlspecialchars($space);

$strtest = "фдвфывлдфоыпвдлфпывлШГШЩНГШНГШНШЩГНГШ1253761253";
echo mb_detect_encoding($strtest);
$rea = convert_cyr_string($strtest, k,i);
echo $rea;
?>