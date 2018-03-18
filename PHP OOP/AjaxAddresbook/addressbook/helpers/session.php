<?php
session_start();

if (!array_key_exists('login',$_SESSION)){

    $_SESSION['login']=0;
    $_SESSION['login']+=1;
    header('Location: index.php');
} else {
    header('Location: login.php');
}
?>



