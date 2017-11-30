<?php
mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo "no connection";
}
mysqli_set_charset($connect,'utf8');

function render($result, $name){
    include $name;
}