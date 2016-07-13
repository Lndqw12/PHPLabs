
<meta charset="UTF-8">
<?php
    $arrexample = array(
        array("name" => "long",
        "Bt" => "Mand"),
        array("name" => "long2",
        "Bt" => "Mand2")
    );
    for($i=0;$i<count($arrexample);$i++)
    {
        echo "{$arrexample[$i]['name']}  was born {$arrexample[$i]['Bt']}<br/>";
    }
?>

<?php
    $bird = array(
        "Thomas Anders" => "song",
        "Mihel Jekson" => "soul",
        "Mihel Jekson2" => "soul2"
    );
 for(reset($bird);($k = key($bird));next($bird))
     echo "$k === {$bird[$k]}<br>";
echo "---------------------------------------<br>";
for(end($bird);($ggg = key($bird));prev($bird))
    echo "$ggg === {$bird[$ggg]}<br>";
echo "---------------------------------------<br>";
foreach($bird as $h=>$m)
    echo  "$h ==>>> $m<br>";
?>