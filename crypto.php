<?php
$str = "ajksdaasda";
$resultmd5 = md5($str);
echo $resultmd5;
echo "<br/>";
$resultmd51 = md5($str);
echo $resultmd51;
echo "<br/>";
$strcrc = "asjhasgdhasdg";
$resultcrc = crc32($strcrc);
echo $resultcrc;
echo "<br/>";
if ($resultcrc<0)
    echo "yes";
else
    echo "no";
//crypt (DES)

$strDES = "asdghasdghasd";
$resDES = crypt($strDES);
echo "<br/>";
echo $resDES;
$sreDESandSTR = "as";
echo "<br/>";
$resDESandSTR = crypt($strDES, $resDESandSTR);
echo $resDESandSTR;
?>