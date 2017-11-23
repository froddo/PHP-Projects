<?php
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');

mysqli_query($connect,'SET NAMES utf8');

$sql='DELETE FROM admin WHERE admin.admin_id=1';

$msql=mysqli_query($connect, $sql);

if ($msql){
    header('Location: admin.php');
}
else{
    echo '<p>no connect data</p>';
}