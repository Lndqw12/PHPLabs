<!--<meta charset="UTF-8">-->
<!--BASIC FUNCTION FOR WORK STRING-->
<?php

$str1= "asdgjkasdfasdfasdf";
$str2= "21371273087123asdfasdf";

$str3 = "asd";

$result = strpos($str2,$str1);
if ($result===false)
    print "No";
//echo $result;
$result = strpos($str2,$str3);
if ($result===false)
    print "No";
else {
    print "Yes";
    print $result;
}
// next expample
$resultnewpos = strpos($str2,$str3,15);// witch position 15 It have to been number 18
if(!($resultnewpos===false))
    print "<br/>".$resultnewpos;
//last position

$resullastpos = strrpos($str2,$str3);
if (!($resullastpos===false))
print "<br/>".$resullastpos;

// basic function strcamp
$str5 = "qwoeiyqiowuHKJHJKHJK8979790";
$str6 = "qwyyeqw";
$str7 = "sadfjaskdfasldfhsfuerqwuncb;ernuwqpefinqwecnwioqefoqwef";
$resulthis = strcmp($str6,str5);
campi($resulthis);
// function for definition < or > , maybe even FULL
function campi($var){

switch ($var) {
    case 0:
        echo "full";
        break;
    case 1:
        echo "<br/>"."first string  MORE second string";
        break;
    case -1:
        echo "<br/>"."first string LESS second string";
        break;
}
}
?>
