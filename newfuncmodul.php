<meta charset="UTF-8">
<?php
// вывод всех параметров на отдельных строках
function myecho() {
    for($i=0;$i<func_num_args();$i++){
        echo func_get_arg($i)."<br/>"; //
    }
}
function tabber($spaces){
    $args = func_get_args();
    array_shift($args);
    $new = array();
    foreach($args as $st){
    $new[] = str_repeat("&nbsp",$spaces).$st;
    }
    call_user_func_array("myecho",$new);
}
tabber(10,"asdasd","aqweqwe","ovdij");

?>