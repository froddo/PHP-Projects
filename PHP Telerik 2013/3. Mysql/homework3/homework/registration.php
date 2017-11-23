<?php
$title="registration";
include "header.php";

mb_internal_encoding('utf-8');
?>
<a href="index.php">Login</a>
<div id="wrapper">
<form id="paper" method="post" action="">
    <div id="margin">Name: <input id="title" type="text" name="text"></div>
    <div id="margin">Password: <input id="title" type="password" name="pass"></div>
    <div id="margin">Password Again: <input id="title" type="password" name="repass"></div>
    <input id="button" type="submit" name="submit" value="Submit">
</form>
</div>
<?php
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');

if (!$connect){

}
mysqli_query($connect,'SET NAMES utf8');

if ($_POST){
$name=trim($_POST['text']);
$pass=trim($_POST['pass']);
$repass=trim($_POST['repass']);
$checkName=false;

if (mb_strlen($name) < 5){
    echo '<p>The name  is short</p>';

}
else if (mb_strlen($pass) < 5){
    echo '<p>The password is short</p>';

}
else if($pass==$repass){
        echo '<p>Password is correct</p>';
        $name=mysqli_real_escape_string($connect,$name);
        $pass=mysqli_real_escape_string($connect,$pass);
        $repass=mysqli_real_escape_string($connect,$repass);
        $sql='SELECT username FROM users'; //checking equal names
        $result=mysqli_query($connect,$sql);
        while ($row=$result->fetch_assoc()){
            if ($row['username']==$name){

                $checkName=true;

            }
        }
        echo '<br>';
        if ($checkName){
            echo '<p>The name is repeated, please enter different name</p>';
        }
        else {
            echo '<p>name is correct</p>';
            $msql='INSERT INTO users(username,password) VALUES ("'.$name.'","'.$pass.'")';
            $res=mysqli_query($connect, $msql);
            mysqli_insert_id($connect);
            if ($res){
                header('Location: index.php');
            }
            else{
                echo "no connection";
            }
        }
    }
    else{
        echo '<p>wrong password</p>';
    }

}



include "footer.php";
?>
