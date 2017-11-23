<?php
$title="login";
include "header.php";

mb_internal_encoding('utf-8');

?>
<a href="registration.php">Registration</a>
<div id="wrapper">
    <form id="paper" method="post" action="">
        <div id="margin">Name: <input id="title" type="text" name="name"></div>
        <div id="margin">Password: <input id="title" type="password" name="pass"></div>
        <input id="button" type="submit" name="submit" value="Submit">
    </form>
</div>
<?php
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');

if (!$connect){

}
mysqli_query($connect,'SET NAMES utf8');

if ($_POST){
    $name=trim($_POST['name']);
    $pass=trim($_POST['pass']);
    $checkUserPass=false;


    if (mb_strlen($name) < 5){
        echo '<p>The name is short</p>';

    }
    if (mb_strlen($pass) < 5){
        echo '<p>The password is short</p>';
    }
    else{

        $name=mysqli_real_escape_string($connect,$name);
        $pass=mysqli_real_escape_string($connect,$pass);
        $sql='SELECT username,password FROM users';
        $result=mysqli_query($connect,$sql);
        if ($result){

        }
        else{
            echo "no writing data";
        }
        while ($row=$result->fetch_assoc()){


            if ($row['username'] == $name && $row['password'] == $pass){

                $msql='INSERT INTO saved (save_id, save_name) VALUES (1,"'.$name.'")';
                $res=mysqli_query($connect,$msql);

                if (!$res){
                    echo "no database";
                }
                $checkUserPass=true;

                header('Location: message.php');
            }

        }
        if ($checkUserPass == false){
            echo '<p>Wrong name or password, please go to registration</p>';
        }

    }
}





include "footer.php";
?>
