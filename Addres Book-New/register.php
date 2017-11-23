<?php
session_start();
if (!array_key_exists('session', $_SESSION)){
    $_SESSION['session']=0;
}
$_SESSION['session']+=1;
if ($_SESSION['session']==true){

    if (isset($_POST['submit'])){
        $name=htmlentities(trim($_POST['name']));
        $pass=htmlentities(trim($_POST['pass']));

        $addData="See-Add-Data";
        if (strlen($name)>3 && strlen($pass)>3 && $name=='ivan' && $pass=='12345'){ ?>
            <a href="logout.php">Logout</a>   <a href="addMore.php">ADD</a>   <a href="addData.php"><?= $addData ?></a><br />
            <?php echo '<br />' ?>
       <?php } else {
            echo "Please Insert correct- name,pass";
        }

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

</body>
</html>