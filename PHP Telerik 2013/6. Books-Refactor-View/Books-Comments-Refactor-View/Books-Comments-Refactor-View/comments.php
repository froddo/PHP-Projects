<?php
session_start();
include 'include/function.php';
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($row=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
$add=[];
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
    $add['com']['user_id']=$rows['saved_user'];
}

if (!array_key_exists('com',$add)){
    $add['com']=array();
}
$add['title']='Comments';
$add['header']='templates/headerComments_public.php';
$add['content']='templates/comments_public.php';
render($add,'templates/layouts/normal_layouts.php');

