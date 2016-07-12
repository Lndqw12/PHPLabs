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

