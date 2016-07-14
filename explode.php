<meta charset="UTF-8">
<?php
$str = "1231231312|wetwetwet|````|20";
echo "$str<br>";
echo "-----------print-----------<br />";
print_r("$str");
echo "<br/>";
echo "----------echo------------<br />";

$rezultstr = explode("|",$str,4);
echo "$rezultstr<br/>";
echo "------------print----------<br>";
print_r($rezultstr);

list ($id, $name, $burn,$comment) = $rezultstr;
echo "<br/>";
echo "------------after list----------<br>";
echo $id;
echo "<br/>";
echo $name;
echo "<br/>";
echo $burn;
echo "<br/>";
echo $comment;
echo "<br/>";
    echo "------------after list \"\"----------<br>";
    echo "$id";
    echo "<br/>";
    echo "$name";
    echo "<br/>";
    echo "$burn";
    echo "<br/>";
    echo "$comment";
    echo "<br/>";


?>