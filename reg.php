<html><body>
 <? if (!isset($_REQUEST['btn']))
{?>
    <form action="<?=$_SERVER['SCRIPT_NAME']?>">
        <p>Log in</p><input type="text" name = "LOGIN" value=""/><br>
        <p>Password</p><input type="text" name = "PASS" value=""/><br>
            <input type="submit" name="btn" value="repeat Enter"/>
    </form>
<?}

   else {
        if ($_REQUEST['LOGIN']=="root"&&$_REQUEST['PASS'] == "111")
        {
            echo "Succes for user $_REQUEST[LOGIN]";
        }
        else
        {
            echo "Close";
        }
      }

    ?>

</body></html>

