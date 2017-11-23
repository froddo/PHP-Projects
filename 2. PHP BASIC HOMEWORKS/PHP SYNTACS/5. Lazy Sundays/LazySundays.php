<?php

$year=2017;
$month=10;


for ($i=1;$i<=31;$i++){
    $dateCreate=date("jS F, Y", strtotime("$i.$month.$year"));
    $chekSunday=date("D", strtotime("$i.$month.$year"));
    if ($chekSunday == "Sun"){
        echo $dateCreate.'<br>';
    }
}
