<?php
session_start();
mb_internal_encoding('utf-8');
if (isset($_POST['submit'])){

    $name=trim($_POST['name']);
    $pass=trim($_POST['pass']);



    if ((mb_strlen($name) > 2 && mb_strlen($pass) > 3) && ($name=="user" && $pass=="qwerty")){

        $_SESSION['user-id']=true;
        if ($_SESSION['user-id']==true){

            header('location: files.php');
        }
        else{
            echo "invalid session";
        }

    }
    else{
        echo "invalid name and password";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
    <meta charset="UTF-8" />
</head>
<body>
<form method="post" action="">
    Name: <input type="text" name="name" /><br />
    Password: <input type="password" name="pass" /><br />
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>
