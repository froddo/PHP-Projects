<?php
mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo '<p>no connection</p>';
}
mysqli_set_charset($connect,'utf8');
function render($add, $name){
    include $name;
}