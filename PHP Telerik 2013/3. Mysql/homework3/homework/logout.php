<?php
session_start();
session_destroy();

$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');
if (!$connect){
    echo "no connection";
}
mysqli_query($connect, 'SET NAMES utf8');
$sql=('DELETE FROM saved WHERE saved.save_id=1');
$result=mysqli_query($connect, $sql);
if ($result){
    header('Location: index.php');

}
else{
    echo "no database";
}
