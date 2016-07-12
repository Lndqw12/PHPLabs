<meta charset="UTF-8">
<?php
//print_r($_SERVER['SCRIPT_NAME']);
if ($_REQUEST['btn'])
{
    foreach($_REQUEST['Know'] as $k=>$kli){
        if ($kli) echo "Вы знаете язык $k<br>";
        else
            echo "Вы не знаете язык $k<br>";
    }
}

?>
<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    Какие языки программирования Вы знаете<br>
    <input type="hidden" name="Know[PHP]" value="0"/>
    <input type="checkbox" name="Know[PHP]" value="1" />PHP</br>
    <input type="hidden" name="Know[CSS]" value="0"/>
    <input type="checkbox" name="Know[CSS]" value="1" />CSS</br>
    <input type="submit" name="btn" value="Enter"/>

</form>