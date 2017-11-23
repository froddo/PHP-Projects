<?php

$number=145;

if ($number<100){
    echo "ok";
}
else{
    for ($i=100; $i <= $number; $i++) {


        if ($i==1000){
            break;
        }

        $a=$i/1;
        $b=$a%10;

        $c=$i/10;
        $d=$c%10;

        $e=$i/100;
        $g=$e%10;

        if ($b==$d||$b==$g||$d==$g) {
            continue;
        }
        else{
            echo $i.'<br>';
        }
    }
}


