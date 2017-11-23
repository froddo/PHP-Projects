<?php
session_start();
$title="allMessages";
include "header.php";

?>
<a href="logout.php">Logout</a> <a href="newMessage.php">Send Message</a> <a href="group-message.php">Group Message</a>

<?php

if (!array_key_exists('login',$_SESSION)){
    $_SESSION['login']=0;

}
$_SESSION['login']+=1;

$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');

if (!$connect){
    echo "no database";
}
mysqli_query($connect,'SET NAMES utf8');

$sclName='SELECT save_name FROM saved';
$sq=mysqli_query($connect, $sclName);
$rows=$sq->fetch_assoc();
$name=$rows['save_name'];
if ($name==null){
    header('Location: logout.php');
}
?>
<div id="wrapper">
<form id="paper" method="post" action="">
    <input id="button" type="submit" name="asc" value="Sort ASC">
    <input id="button" type="submit" name="desc" value="Sort DESC">
</form>
</div>
<?php
if (isset($_POST['desc'])){
    header('Location: message.php');
}
if (isset($_POST['asc'])){
    $ascSql='SELECT dates,user_msg,msg_name,msg_data FROM message AS NewDate ORDER BY msg_id ASC';
    $ascResult=mysqli_query($connect, $ascSql);
    if (!$ascResult){
        echo "no asc connection";
    }
    ?>
    <table>
        <tr>
            <th>Дата</th>
            <th>Име</th>
            <th>Заглавие</th>
            <th>Съобщение</th>
        </tr>


        <?php while ($roww=$ascResult->fetch_assoc()){ ?>
            <tr>
                <td class="class"><?= $roww['dates'] ?></td>
                <td class="class"><?= $roww['user_msg'] ?></td>
                <td class="class"><?= $roww['msg_name'] ?></td>
                <td class="class"><?= $roww['msg_data'] ?></td>
            </tr>
        <?php } ?>
    </table>

    <?php exit; ?>
<?php }  ?>


<?php

$sql='SELECT dates,user_msg,msg_name,msg_data FROM message AS NewDate ORDER BY msg_id DESC';

$resultMessage=mysqli_query($connect, $sql);
?>
<table>
    <tr>
        <th>Дата</th>
        <th>Име</th>
        <th>Заглавие</th>
        <th>Съобщение</th>
    </tr>


<?php while ($row=$resultMessage->fetch_assoc()){ ?>
    <tr>
        <td class="class"><?= $row['dates'] ?></td>
        <td class="class"><?= $row['user_msg'] ?></td>
        <td class="class"><?= $row['msg_name'] ?></td>
        <td class="class"><?= $row['msg_data'] ?></td>
    </tr>
<?php } ?>
</table>



<?php include "footer.php"; ?>

















