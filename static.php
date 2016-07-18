<meta charset="UTF-8">
<?php
function selfcount(){
    static $count = 0;
    for($i=0;$i<10;$i++)
        echo $count++."<br/>";
}
selfcount();
?>
