<meta charset="UTF-8">
<?php
if (!function_exists("virtual")){
    function virtual($uri){
        $url = "http://".$_SERVER["HTTP_HOST"].$uri;
        echo join("", file($url));
    }
}
virtual("/");
?>