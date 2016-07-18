<meta charset="UTF-8">
<?php
function dumper($obj){
    echo
    "<font size=2><pre>",
        htmlspecialchars(dumperGet($obj)),
        "</pre>
        </font>";
   }
function dumperGet($obj,$leftSp=""){
    if (is_array($obj)) {
        $type = "Array[".count($obj)."]";
    } elseif (is_object($obj))
    {
        $type = "Object";
    }
    elseif (gettype($obj)=="boolean")
    {
     return $obj ? "true" : "false";
    }
    else {
        return "\"$obj\"";
    }
    $buf = $type;
    $leftSp.="    ";
    for (reset($obj); list ($k,$v)=each($obj);){
        if ($k ==="GLOBALS") continue;
        $buf.= "\n$leftSp$k =>".dumperGet($v, $leftSp);
    }
    return $buf;
    }

?>

