<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.07.2016
 * Time: 16:49
 */
$qarr = array(
    "one" => array("p"=>"n","h"=>"f"),
    "two" => array("y"=>"7")
);

$qarrand = array(
    "one" => array("p"=>"n44","hd"=>"f23"),
    "four" => array("y"=>"11","gh"=>"99")
);
    print_r($qarr);
        echo "<br />";
        echo $qarr['two'];
    print_r($qarr['two']);
    $num = count($qarr);
        echo "<br />";
        echo $num;
    $sumarray = $qarr + $qarrand;
        echo $sumarray;
        echo "<br />";
    print_r($sumarray);
//array_marge
$marr_sum = array_merge($qarr,$qarrand);
    echo "<br />";
    echo $marr_sum;
    echo "<br />";
    print_r($marr_sum);
?>