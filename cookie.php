<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 07.07.2016
 * Time: 9:30
 */
$cout = 0;
if (isset($_COOKIE['cout']))
//then
    $cout = $_COOKIE['cout'];

$cout++;
setcookie("cout",$cout,0x7FFFFFFF,"/");
echo $cout;
?>