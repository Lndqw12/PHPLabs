<meta charset="UTF-8">
<?php
foreach(array(101,203,34) as $magic)
    echo "On well ===>>> $magic<br>";
    echo"----------------<br>";
    $garr = array(34,56,78,5,0,88,33,22,34);
        foreach($garr as $lol){
            $lol++;
            echo "$lol<br>";
        }
echo"----------------<br>";
    for($h=0;$h<count($garr);$h++)
        echo "$garr[$h]<br>";
echo"----------------<br>";
foreach($garr as $lol){
    $lol++;
    echo "$lol<br>";
}
echo"----------------<br>";
?>