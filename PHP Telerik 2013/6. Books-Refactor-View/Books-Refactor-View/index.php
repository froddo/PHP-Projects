<?php
include "include/function.php";
if (isset($_GET['author_id']) ){

    $get = (int)$_GET['author_id'];

    $get =(int) mysqli_real_escape_string($connect, $get);


    $sql = 'SELECT * FROM books_authors as ba INNER JOIN books as b ON ba.book_id=b.book_id INNER JOIN books_authors as bba ON bba.book_id=ba.book_id 
INNER JOIN authors as a ON bba.author_id=a.author_id WHERE ba.author_id="' . $get . '"';
    $msql = mysqli_query($connect, $sql);

}
else{

    $sql='SELECT * FROM books_authors LEFT JOIN books ON books.book_id=books_authors.book_id 
LEFT JOIN authors ON authors.author_id=books_authors.author_id';
    $msql=mysqli_query($connect, $sql);

}
if (isset($_GET['sortDESC']) == "DESC"){

    $sql='SELECT * FROM books_authors LEFT JOIN books ON books.book_id=books_authors.book_id 
        LEFT JOIN authors ON authors.author_id=books_authors.author_id ORDER BY books.book_id DESC';
    $msql=mysqli_query($connect, $sql);
}
$result=[];

while ($row=mysqli_fetch_assoc($msql)){


    $result['books'][$row['book_id']]['book_title']=$row['book_title'];

    $result['books'][$row['book_id']]['authors'][$row['author_id']]=$row['author_name'];

}

if (isset($_GET['author_id']) && count($result) == 0){
  echo  '<p>Невалиден автор</p>';
}
if (count($result)==0){
    echo '<p>Моля въведете автор и книга</p>';
}

$result['title']='Всички книги';
$result['header']='templates/header_public.php';
$result['content']='templates/index_public.php';
render($result,'templates/layouts/normal_layout.php');
