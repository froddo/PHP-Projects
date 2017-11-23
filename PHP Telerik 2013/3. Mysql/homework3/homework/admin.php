<?php
mb_internal_encoding('utf-8');
$title="admin";
include "header.php";
?>
    <h1 class="threed">Only Admin</h1>

<div id="wrapper">
<form id="paper" method="post" action="">
    <div id="margin">Name: <input id="title" type="text" name="admin"></div>
    <div id="margin">Password: <input id="title" type="password" name="pass"></div>
    <input id="button" type="submit" name="submit" value="Go">
</form>
</div>
<?php
if (isset($_POST['submit'])){
    $name=trim($_POST['admin']);
    $pass=trim($_POST['pass']);
    if ($name=="topalovr" && $pass=="qwerty"){

        $connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');
        mysqli_query($connect,'SET NAMES utf8');
        if (!$connect){
            echo '<p>no connection<p>';
        }

        $sql='INSERT INTO admin(admin_id,admin_name) VALUES (1,"'.$name.'")';
        $msql=mysqli_query($connect, $sql);

        if ($msql){
            header('Location: message-admin.php');
        }
        else{
            echo '<p>no connection data</p>';
        }

    }
    else{
        echo '<p>name and password is invalid</p>';
    }

}



include "footer.php";