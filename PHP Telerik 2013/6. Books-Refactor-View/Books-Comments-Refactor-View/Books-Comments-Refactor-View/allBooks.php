<?php
session_start();

include 'include/function.php';

if (!array_key_exists('login',$_SESSION)){
    $_SESSION['login']=0;
}
$_SESSION['login']+=1;

$authorCheck=false;
$bookCheck=false;
$add=[];

if ($_SESSION==true){

    if (isset($_GET['author_id'])){
        $authorId=(int)$_GET['author_id'];
       $bookCheck=true;
        $sql='SELECT * FROM books_authors AS ba INNER JOIN books AS b ON ba.book_id=b.book_id 
    INNER JOIN books_authors AS bba ON bba.book_id=ba.book_id INNER JOIN authors AS a ON bba.author_id=a.author_id WHERE ba.author_id="'.$authorId.'"';
        $msq=mysqli_query($connect, $sql);
    }
    else if (isset($_GET['book_id'])) {
        $bookId=(int)$_GET['book_id'];
    $authorCheck=true;
        $sql='SELECT * FROM books_authors AS ba INNER JOIN books AS b ON ba.book_id=b.book_id 
    INNER JOIN books_authors AS bba ON bba.book_id=ba.book_id INNER JOIN authors AS a ON bba.author_id=a.author_id WHERE ba.book_id="'.$bookId.'"';
        $msq=mysqli_query($connect, $sql);

        $sq='SELECT `user`,`book_title`,`comment`,`dates` FROM comments WHERE book_id="'.$bookId.'" ORDER BY user_id DESC';
        $mq=mysqli_query($connect, $sq);
    }
    else{
        $sql='SELECT * FROM books_authors LEFT JOIN books ON books.book_id=books_authors.book_id 
    LEFT JOIN authors ON authors.author_id=books_authors.author_id';
        $msq=mysqli_query($connect, $sql);

        $sq='SELECT `user`,`book_title`,`comment`,`dates` FROM comments ORDER BY user_id DESC';
        $mq=mysqli_query($connect, $sq);

    }
    if ($bookCheck == false){
        while ($rows=$mq->fetch_assoc()){
            $add['comment'][]=$rows;
        }
    }


    while ($row=$msq->fetch_assoc()){
        $add['book'][$row['book_id']]['book_title']=$row['book_title'];
        $add['book'][$row['book_id']]['authors'][$row['author_id']]=$row['author_name'];
    }
    if (count($add)==0){
        echo '<p>Please enter books and authors</p>';
    }
    if (!array_key_exists('comment',$add)){
        $add['comment']=array();
    }
    if (!array_key_exists('book',$add)){
        $add['book']=array();
    }

}
$add['$authorCheck']=$authorCheck;
$add['$bookCheck']=$bookCheck;
$add['title']='allBooks';
$add['header']='templates/headerAllBooks_public.php';
$add['content']='templates/allBooks_public.php';

render($add, 'templates/layouts/normal_layouts.php');






































