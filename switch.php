<meta charset="UTF-8">
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 12.07.2016
 * Time: 11:01
 */
if(isset($_REQUEST['go'])) {
    switch ($_REQUEST['num']):
        case 1:
            echo "One";
            break;
        case 2:
            echo "Two";
            break;
        case 3:
            echo "Three";
            break;
        case 4:
            echo "Four";
            break;
        default: echo "ERROR";
    endswitch;
}
?>
<form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
    Your number: <input type="text" name="num"/>
    <input type="submit" name="go"/>
</form>