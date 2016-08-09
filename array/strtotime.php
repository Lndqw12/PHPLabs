<meta charset="UTF-8">
<?php
$check = array(
    "now",
    "10 September 2000",
    "+1 day",
    "+1 week",
    "+1 week 2 day 4 hours 2 second",
    "next Thursday",
    "last Monday",
);
?>
<table width="100%">
    <tr align="left">
        <th>Входная строка</th>
        <th>Timestamp</th>
        <th>Получившая дата</th>
        <th>Сегодня</th>
    </tr>
    <?foreach ($check as $str) {?>
        <tr>
            <td><?=$str?></td>
            <td><?=$stramp = strtotime($str)?></td>
            <td><?=date("Y-m-d H:i:s",$stramp)?></td>
            <td><?=date("Y-m-d H:i:s", time())?></td>
        </tr>
    <?}?>
</table>
<?php
echo "<br>";
$input = "Friday";
$twoinp = "Monday";
$otime = strtotime($input);
$o2time = strtotime($twoinp);
echo $otime;
echo "<br>";
echo $o2time;
echo "<br>";
$jd = GregorianToJD(05,22,1971);
echo "$jd<br>";
$gregorian = JDToGregorian($jd);
echo "$gregorian";
$list = explode($gregorian, "/");
?>