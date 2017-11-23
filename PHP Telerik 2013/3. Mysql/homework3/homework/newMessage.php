<?php
session_start();
mb_internal_encoding('utf-8');
$title="newMessage";
include "header.php";

?>

<a href="logout.php">Logout</a> <a href="message.php">See Messages</a> <a href="group-message.php">Group Message</a>
<div id="wrapper">

    <form id="paper" method="post" action="">
        <div id="margin">Title: <input id="title" type="text" name="title"></div>

        <textarea placeholder="Enter something funny." id="text" name="text" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea><br>
        <input id="button" type="submit" name="submit" value="Create">
    </form>
</div>
<?php

$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');
if (!$connect){

}
mysqli_query($connect,'SET NAMES utf8');

$checkName='SELECT save_name FROM saved';
$checkSql=mysqli_query($connect, $checkName);
$rows=$checkSql->fetch_assoc();
$check=$rows['save_name'];
if ($check == null){
    header('Location: logout.php');
}


if (isset($_POST['submit'])){

    $titleMessage=trim($_POST['title']);
    $newMessage=trim($_POST['text']);

    if (mb_strlen($titleMessage) < 1){
        echo "Title message is short";
    }
    else if (mb_strlen($titleMessage) > 50){
        echo "Title message is very long";
    }
    else if (mb_strlen($newMessage) < 1){
        echo "The message is short";
    }
    else if (mb_strlen($newMessage) > 250){
        echo "The message is very long";
    }
    else{
        $titleMessage=mysqli_real_escape_string($connect, $titleMessage);
        $newMessage=mysqli_real_escape_string($connect, $newMessage);

        $sclName='SELECT save_name FROM saved';
        $sq=mysqli_query($connect, $sclName);
        $row=$sq->fetch_assoc();
        $name=$row['save_name'];

        $sql='INSERT INTO message(user_msg,msg_name,msg_data,dates) VALUES ("'.$name.'","'.$titleMessage.'", "'.$newMessage.'",CURRENT_DATE())';
        $msql=mysqli_query($connect, $sql);
        mysqli_insert_id($connect);


        if ($msql){
            header('Location: message.php');
        }
        else{
            echo "no connection";
        }

    }
}

include "footer.php";