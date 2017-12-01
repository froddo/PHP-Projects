<?php
session_start();
session_destroy();
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
   echo '<p>error connection</p>';
}
mysqli_set_charset($connect,'utf8');
$sql='DELETE FROM `saved_user` WHERE user_id=1';
$msq=mysqli_query($connect, $sql);
header('Location: login.php');