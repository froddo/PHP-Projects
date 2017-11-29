<?php
session_start();
$title="comments";
include "header.php";
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo '<p>no connection</p>';
}
mysqli_set_charset($connect,'utf8');
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($row=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
$addUser=[];
if (!array_key_exists('book_title',$_GET)){
    $_GET['book_title']=true;
}
$bookTitle=$_GET['book_title'];
if (!array_key_exists('book_id',$_GET)){
    $_GET['book_id']=true;
}
$bookId=intval($_GET['book_id']);

if ($_POST){
    $idBook=intval($_POST['hidden']);
    $user=trim($_POST['user']);
    $book=trim($_POST['book']);
    $comment=trim($_POST['comment']);
    $user=mysqli_real_escape_string($connect, $user);
    $book=mysqli_real_escape_string($connect, $book);
    $comment=mysqli_real_escape_string($connect, $comment);
    $sql='INSERT INTO comments(`book_id`,`user`,`book_title`,`comment`,`dates`) VALUES ("'.$idBook.'","'.$user.'","'.$book.'","'.$comment.'",CURRENT_TIME)';
    $msq=mysqli_query($connect, $sql);
    mysqli_insert_id($connect);
    if ($msq){
        header('location: allBooks.php');
    }
}
$sq='SELECT * FROM saved_user WHERE user_id=1';
$ms=mysqli_query($connect, $sq);
while ($rows=$ms->fetch_assoc()){
    $addUser['user_id']=$rows['saved_user'];
}

?>
    <a href="allBooks.php">AllBooks</a>
    <form method="post" action="comments.php">
        <input type="hidden" name="hidden" value="<?= $bookId?>">
        User: <input type="text" name="user" value="<?=$addUser['user_id']?>"><br>
        Book: <input type="text" name="book" value="<?= $bookTitle ?>"><br>
        Comment: <textarea rows="4" cols="30" name="comment"></textarea><br>

        <input type="submit" value="AddComment">
    </form>
<?php
include "footer.php";