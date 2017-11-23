<?php 

$firstNumber=2;
$secondNumber=5;
sumNumbers($firstNumber,$secondNumber);
echo '<br>';
$firstNumber=1.567808;
$secondNumber=0.356;
sumNumbers($firstNumber,$secondNumber);
echo '<br>';
$firstNumber=1234.5678;
$secondNumber=333;
sumNumbers($firstNumber,$secondNumber);

function sumNumbers($firstNumber, $secondNumber){

    $result="firstNumber + secondNumber\n=\n".$firstNumber ."\n+\n". $secondNumber."\n=\n";
    echo $result;
    echo number_format((float)$firstNumber+$secondNumber, 2,'.','');

}