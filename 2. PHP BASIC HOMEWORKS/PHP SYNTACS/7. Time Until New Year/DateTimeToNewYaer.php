<?php

$starDate=mktime(23,59,59,12,31,2017);
$endDate=time();

$time=$starDate-$endDate;

$hoursTime=$time / (3600);
echo "Hours until new year :\n ";
echo floor($hoursTime).'<br>';

$minutesTime=$time / (60);
echo "Minutes until new year :\n ";
echo floor($minutesTime).'<br>';

$secondTime=$time /(1);
echo "Seconds until new year :\n ";
echo floor($secondTime).'<br>';


//days,hours,minutes,seconds
$days=floor($time / (3600*24));
$time %= 86400;

$hours= floor($time / 3600);
$time %= 3600;

$minutes= floor($time / 60);
$time %= 60;

echo "Days:Hours:Minutes:Seconds\n";
echo $days.':'.$hours.':'.$minutes.':'.$time;




