<?php
include 'include/function.php';
if ($_POST){
    $check=true;
$passCheck=false;
    $user=trim($_POST['user']);
    $pass=trim($_POST['pass']);

    if (mb_strlen($user) < 3){
        echo '<p>Username is short</p>';
        $check=false;
    }
    else if (mb_strlen($pass) < 3){
        echo '<p>Password is short</p>';
        $check=false;
    }
    if ($check==true){
        $user=mysqli_real_escape_string($connect, $user);
        $pass=mysqli_real_escape_string($connect, $pass);

        $sql='SELECT username,password FROM users WHERE username="'.$user.'"';
        $msql=mysqli_query($connect, $sql);
        while ($row=$msql->fetch_assoc()){

            if (password_verify($pass, $row['password']) && $row['username'] == $user){
                echo '<p>Password and username is valid</p>';
                $passCheck=true;
            }

        }
        if ($passCheck == true){
            $sq='INSERT INTO `saved_user`(user_id,saved_user) VALUES (1,"'.$user.'")';
            $ms=mysqli_query($connect, $sq);
            header('Location: allBooks.php');
        }
        if ($passCheck == false){
            echo '<p>Invalid username or password</p>';
        }
    }
}
$add=[];
if (!array_key_exists('login',$add)){
    $add['login']=array();
}

$add['title']='login';
$add['header']='templates/headerLogin_public.php';
$add['content']='templates/login_public.php';
render($add,'templates/layouts/normal_layouts.php');




