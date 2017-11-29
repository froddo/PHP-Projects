<?php
$title="user-comments";
include "header.php";
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo '<p>no connection</p>';
}
mysqli_set_charset($connect,'utf8');
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($rowss=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
$addUser=[];
if (isset($_GET['user'])){
    $user=$_GET['user'];
    $sql='SELECT `user`,`book_title`,`comment`,`dates` FROM comments WHERE `user`="'.$user.'"';
    $msq=mysqli_query($connect, $sql);
    while ($row=$msq->fetch_assoc()){
        $addUser[]=$row;
    }
}
?>
<a href="allBooks.php">AllBooks</a>
<br><br>
<table>
    <tr>
        <th>Name</th>
        <th>Selected Books</th>
        <th>Comments</th>
        <th>Data</th>
    </tr>
<?php foreach ($addUser as $item) { ?>
    <tr>
    <?php foreach ($item as $value) { ?>
        <td><?= $value ?></td>
    <?php } ?>
    </tr>
<?php } ?>
</table>
<?php
include "footer.php";