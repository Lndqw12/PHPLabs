
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