<?php
mb_internal_encoding('utf-8');
$title="Group";
include "headers.php";
$key=0;
$group=[1=>"Общи приказки",2=>"Здравословно хранене",3=>"Програмиране",4=>"Операционни системи",5=>"Спорт"];
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','telerik');
if (!$connect){
    echo "no connect data";
}
mysqli_query($connect,'SET NAMES utf8');
$sqlDelete='SELECT save_name FROM saved';
$conn=mysqli_query($connect, $sqlDelete);
$roww=$conn->fetch_assoc();
$check=$roww['save_name'];
if ($check==null){
    header('Location: logout.php');
}
if (isset($_POST['submit'])){
    $title=trim($_POST['user']);
    $text=trim($_POST['text']);
    $key=(int)$_POST['select'];
    $checkName=false;
    $checkText=false;
    if (mb_strlen($title) < 50 && mb_strlen($title) > 0){

        $checkName=true;
    }
    if (mb_strlen($text) < 250 && mb_strlen($text) > 0){
        $checkText=true;
    }
    if ($checkName==true && $checkName== true){

        $title=mysqli_real_escape_string($connect, $title);
        $text=mysqli_real_escape_string($connect, $text);
        $sqlName='SELECT save_name FROM saved';
        $sqlResult=mysqli_query($connect, $sqlName);
        $row=$sqlResult->fetch_assoc();
        $name=$row['save_name'];

        $sql='INSERT INTO group_message(`group`,user_name,title_message,message,dates) VALUES ("'.$group[$key].'","'.$name.'","'.$title.'","'.$text.'", CURRENT_DATE())';
        $con=mysqli_query($connect,$sql);

        if ($con){

        }
        else{
            echo "no connect";
        }

    }
    else{
        echo '<p>Title name or text name is big</p>';
    }
}

?>
<a href="logout.php">Logout</a> <a href="newMessage.php">Send Message</a> <a href="message.php">See Messages</a>
<div id="wrapper">
<form id="paper" method="post" action="">
    <?php foreach ($group as $index => $item) { ?>


        <div>
            <input id="button" type="submit" name="name" value="<?= $item ?>">
        </div>

    <?php } ?>

    <div id="margin">Title: <input id="title" type="text" name="user"><br></div>
    <textarea placeholder="Enter something funny" id="text" name="text" rows="2"></textarea><br>
    <select name="select">
        <?php foreach ($group as $index => $item) { ?>
            <option <?= $key == $index ? 'selected':""?> value="<?= $index ?>"><?= $item ?></option>
        <?php } ?>
    </select>
    <input id="button" type="submit" name="submit" value="Добави"><br>

</form>
</div>
<?php
if (isset($_POST['name'])){
    $names=$_POST['name'];
    $searchGroup='SELECT user_name,title_message,message,dates FROM group_message WHERE `group`="'.$names.'"';
    $result=mysqli_query($connect, $searchGroup);
    ?>
<table>
    <tr>
        <th>Име</th>
        <th>Заглавие</th>
        <th>Съобщение</th>
        <th>Дата</th>
    </tr>
<?php    while ($rows=$result->fetch_assoc()){ ?>
<tr>
    <td class="class"><?= $rows['user_name'] ?></td>
     <td class="class"><?= $rows['title_message'] ?></td>
    <td class="class"><?= $rows['message'] ?></td>
     <td class="class"><?= $rows['dates'] ?></td>
</tr>
 <?php } ?>
</table>
<?php } ?>

<?php
include "footer.php";
?>