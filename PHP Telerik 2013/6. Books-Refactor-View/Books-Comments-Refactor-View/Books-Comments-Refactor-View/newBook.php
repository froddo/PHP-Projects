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
if (isset($_POST['book'])&& $check==true){

   $book=trim($_POST['book']);
   if (!array_key_exists('select', $_POST)){
       $_POST['select']=array();
   }
   $authorId=($_POST['select']);

   $authorId=array_map('intval',$authorId);
    if (count($authorId)==0){
        echo '<p>Please chose author</p>';
    }
    else if (mb_strlen($book) < 2){
       echo '<p>Name of the book is short</p>';
       $check=false;
    }
    else if ($check == true){
        $book=mysqli_real_escape_string($connect, $book);
        $sq='INSERT INTO books(book_title) VALUES ("'.$book.'")';
        $msq=mysqli_query($connect, $sq);
        $bookId=mysqli_insert_id($connect);
        foreach ($authorId as $item) {

            $sqq='INSERT INTO books_authors(book_id, author_id) VALUES ("'.$bookId.'", "'.$item.'")';
            $mssq=mysqli_query($connect, $sqq);
        }

    }
}
$add=[];
$sql='SELECT * FROM authors';
$msql=mysqli_query($connect, $sql);
while ($row=$msql->fetch_assoc()){
    $add['book'][]=$row;
}

$add['title']='newBook';
$add['header']='templates/headerBook_public.php';
$add['content']='templates/book_public.php';
render($add,'templates/layouts/normal_layouts.php');


