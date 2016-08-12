<?php
echo "<pre>";
//echo phpinfo();
echo phpversion();
echo "<br/>";
echo "Last chenge = ".date("d.m.Y H:i.s.",getlastmod());
echo "<br/>";
echo $DOCUMENT_ROOT;
echo $_SERVER['DOCUMENT_ROOT'];
echo "</pre>";

echo "----------------------------";
echo "<br/>";

error_reporting(E_ALL);
ini_set("error_log", "log.txt");
ini_set("log-errors", true);
//filetime("spoon");
echo "----------------------------";
echo "<br/>";

function inner ($a) {
    echo "<pre>";
    print_r(debug_backtrace());
    echo "<pre/>";
}

function outer ($x) {
    inner ($x*$x);
}

outer(3);
?>