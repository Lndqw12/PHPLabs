<meta charset="UTF-8">
<?if(isset($_REQUEST['btn'])):?>
<h1>Date getting</h1>
<?else:?>
<h2>Date not getting</h2>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
    Name <input name="name" type="text"><br>
    <input type="submit" value="GO" name="btn"/>
</form>
<?endif?>
<?php
   $val1 = 20;
    $port = 23;
    while ($val1<$port): {
        echo "itr<br />";
        $port--;
    }
    endwhile;
?>
<?php
for($i=0, $j=0, $k="Points";$i<100;$j++,$i+=$j)
    $k=$k."$i"." ";
echo $k;
?>

