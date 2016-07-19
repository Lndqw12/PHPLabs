<meta charset="UTF-8">
<?php
function one($a){
    echo $a,"<br/>";
    function one_child($b){
        echo $b+1,"<br/>";
        return $b*$b;
    }
    return $a*$a*one_child($a);
}

one(10);
//one_child(2);
one(20);
?>