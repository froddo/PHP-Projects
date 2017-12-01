<?php
include "include/function.php";
$bookCheck=false;
$check=true;
$result=[];
$cql='SELECT * FROM authors';

$msql=mysqli_query($connect,$cql);

while ($row=$msql->fetch_assoc()){
    $result['book'][$row['author_id']]=$row['author_name'];

}
if (isset($_POST['find'])){
    $search=trim($_POST['search']);
    $search=mysqli_real_escape_string($connect,$search);
    $q=mysqli_query($connect,'SELECT `book_title` FROM `books` WHERE book_title="'.$search.'" ');
    while ($row=$q->fetch_assoc()){
        if ($row['book_title']){
            echo '<p>Книгата съществува</p>';
        }
        $bookCheck=true;

    }
    if ($bookCheck==false){
        echo '<p>Книгата не съществува</p>';
    }
$check=false;

}

if (isset($_POST['name']) && $check==true){
    $book=trim($_POST['name']);

    if (!array_key_exists('group',$_POST)){
        $_POST['group']=array();
    }
    $bookKey=$_POST['group'];

    $bookKey=array_map('intval',$bookKey);

    if (mb_strlen($book) < 2 ){
        echo '<p>Името е късо</p>';
        $check=false;
    }
    if (count($bookKey)==0){
        echo '<p>Няма избран автор</p>';
        $check=false;
    }
    if ($check==true){
        $book=mysqli_real_escape_string($connect,$book);
        $sq='INSERT INTO books(book_title) VALUES ("'.$book.'")';
        $msq=mysqli_query($connect,$sq);
        $insertId=mysqli_insert_id($connect);

        foreach ($bookKey as $value) {

            $bookId='INSERT INTO books_authors(author_id,book_id) VALUES ("'.$value.'","'.$insertId.'")';
            $mqBookId=mysqli_query($connect, $bookId);
        }

    }
}
if (count($result)==0){
    echo '<p>Моля въведете книга</p>';
}
$result['title']='Нова книга';
$result['header']='templates/bookHeader_public.php';
$result['content']='templates/book_public.php';
render($result,'templates/layouts/normal_layout.php');


