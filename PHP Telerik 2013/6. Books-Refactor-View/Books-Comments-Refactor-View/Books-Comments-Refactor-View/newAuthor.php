<?php
session_start();
include 'include/function.php';
$check=true;
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($rowss=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
if ($_POST){
    $author=trim($_POST['author']);

    if (mb_strlen($author)< 2){
        echo  '<p>The name is short</p>';
        $check=false;
    }
    if ($check == true){
        $author=mysqli_real_escape_string($connect, $author);
        $sql='SELECT author_name FROM authors';
        $msql=mysqli_query($connect, $sql);
        while ($row=$msql->fetch_assoc()){
            if ($row['author_name'] == $author){
                $check=false;
            }
        }
        if ($check == false){
            echo  '<p>Author name is exist</p>';
        }
        else if ($check == true){
            $sq='INSERT INTO authors (author_name) VALUES ("'.$author.'")';
            $mq=mysqli_query($connect,$sq);
            mysqli_insert_id($connect);
            if (!$mq){
                echo  '<p>Error record</p>';
            }
            else{
                echo  '<p>Author is added</p>';
            }

        }
    }
}

$sqq='SELECT * FROM authors';
$msq=mysqli_query($connect, $sqq);
$add=[];
while ($rows=$msq->fetch_assoc()) {
    $add['author'][]=$rows;
}

$add['title']='newAuthor';
$add['header']='templates/headerAuthor_public.php';
$add['content']='templates/author_public.php';
render($add,'templates/layouts/normal_layouts.php');

