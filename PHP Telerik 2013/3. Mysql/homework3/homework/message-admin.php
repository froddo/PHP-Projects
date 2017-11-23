<?php

$title="messages-admin";
include "header.php";
?>
<a href="logout-admin.php">Logout</a>
<?php

$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');

if (!$connect){
    echo "no database";
}
mysqli_query($connect,'SET NAMES utf8');

$sclName='SELECT admin_name FROM admin';
$sq=mysqli_query($connect, $sclName);
$rows=$sq->fetch_assoc();
$name=$rows['admin_name'];
if ($name==null){
    header('Location: admin.php');
}

$sql='SELECT dates,user_msg,msg_name,msg_data,msg_id FROM message AS NewDate ORDER BY msg_id DESC';

$resultMessage=mysqli_query($connect, $sql);

?>
<table>
    <tr>
        <th>Дата</th>
        <th>Име</th>
        <th>Заглавие</th>
        <th>Съобщение</th>
        <th>Изтрий</th>
    </tr>


    <?php while ($row=$resultMessage->fetch_assoc()){ ?>
    <tr>


            <td class="class"><?= $row['dates'] ?></td>
            <td class="class"><?= $row['user_msg'] ?></td>
            <td class="class"><?= $row['msg_name'] ?></td>
            <td class="class"><?= $row['msg_data'] ?></td>
            <form method="post" action="">
                <input type="hidden" name="delete" value="<?= $row['msg_id'] ?>">
                <td class="class"> <input id="button" type="submit" name="submit" value="Изтрий"></td>
            </form>
    </tr>

    <?php } ?>

</table>
<?php
if (isset($_POST['submit'])){
    $numberId=$_POST['delete'];

    $msql='DELETE FROM message WHERE message.msg_id="'.$numberId.'"';

    $result=mysqli_query($connect, $msql);
    header('Location: message-admin.php');
}
?>


<?php include "footer.php"; ?>

















