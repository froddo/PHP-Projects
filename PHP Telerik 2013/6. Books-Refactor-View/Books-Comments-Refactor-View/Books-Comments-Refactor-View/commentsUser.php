<?php
include 'include/function.php';
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($rowss=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
$add=[];
if (isset($_GET['user'])){
    $user=$_GET['user'];
    $sql='SELECT `user`,`book_title`,`comment`,`dates` FROM comments WHERE `user`="'.$user.'"';
    $msq=mysqli_query($connect, $sql);
    while ($row=$msq->fetch_assoc()){
        $add['comment'][]=$row;
    }
}

if (!array_key_exists('comment',$add)){
    $add['comment']=array();
}
$add['title']='userComments';
$add['header']='templates/headerCommentsUser_public.php';
$add['content']='templates/commentsUser_public.php';
render($add,'templates/layouts/normal_layouts.php');

