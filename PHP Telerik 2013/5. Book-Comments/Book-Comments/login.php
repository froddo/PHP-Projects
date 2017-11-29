<?php
$title="Login";
include "header.php";
mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo "no database";
}
mysqli_set_charset($connect,'utf8');
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
?>

<a href="register.php">Registration</a>
<form method="post" action="login.php">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <input type="submit" value="Enter">
</form>
<?php
include "footer.php";





