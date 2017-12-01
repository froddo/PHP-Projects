<?php
include 'include/function.php';
if ($_POST){
    $check=true;
    $user=trim($_POST['user']);
    $pass=trim($_POST['pass']);
    $rePass=trim($_POST['again-pass']);

    if (mb_strlen($user) < 3){
        echo '<p>Username is short</p>';
        $check=false;
    }
    else if (mb_strlen($pass) < 3){
        echo '<p>Password is short</p>';
        $check=false;
    }
    else if ($check==true && $pass !== $rePass){
        echo '<p>Passwords are different</p>';
        $check=false;
    }
    else {
        $sq='SELECT username FROM `users` WHERE username="'.$user.'"';
        $msq=mysqli_query($connect, $sq);
        while ($row=$msq->fetch_assoc()){
            if ($row['username'] == $user){

                $check=false;
            }
        }
        if ($check == false){
            echo '<p>The name is taken</p>';
        }
    }
    if ($check==true && $pass==$rePass){
        echo '<p>Successful entrance</p>';

        $user=mysqli_real_escape_string($connect, $user);
        $pass=mysqli_real_escape_string($connect, $pass);

        $options=['cost'=> 12];
        $passHash=password_hash($pass, PASSWORD_BCRYPT, $options);

        $sql='INSERT INTO users (username, password) VALUES ("'.$user.'","'.$passHash.'")';
        $msql=mysqli_query($connect, $sql);
        mysqli_insert_id($connect);


        if (!$msql){
            echo '<p>Error record</p>';
        }
        else{
            echo '<p>Record inserted successfully</p>';
        }
    }
}
$add=[];
if (!array_key_exists('register',$add)){
    $add['register']=array();
}

$add['title']='login';
$add['header']='templates/headerRegister_public.php';
$add['content']='templates/register_public.php';
render($add,'templates/layouts/normal_layouts.php');




