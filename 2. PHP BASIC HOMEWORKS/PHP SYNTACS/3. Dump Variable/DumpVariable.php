<?php 

$string="hello";
$number=15;
$doubNumber=1.234;
$arr=array(1,2,3);
$obj=(object)[2,34];
    echo gettype($string).'<br>';
    var_dump($number).'<br>';
    var_dump($doubNumber).'<br>';
    echo gettype($arr).'<br>';
    echo gettype($obj);



