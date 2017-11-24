<?php
$title="index";
include "header.php";
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo "no connection database";
}
mysqli_query($connect,'SET NAMES utf8');



?>

    <a href="newBook.php">Нова книга</a> <a href="newAuthor.php">Нов автор</a> <a  href="index.php">Книги</a>
    <a href="index.php">SortAsc</a> <a href="index.php?sortDESC=DESC">SortDesc</a>
<br>
<?php


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


    $result[$row['book_id']]['book_title']=$row['book_title'];

    $result[$row['book_id']]['authors'][$row['author_id']]=$row['author_name'];

}

if (isset($_GET['author_id']) && count($result) == 0){
  echo  '<p>Invalid author</p>';
}
?>
   <br>
   <table border="1">
       <tr>
           <th>Книга</th>
           <th>Автори</th>
       </tr>

 <?php foreach ($result as $row) { ?>
   <tr>
        <td><?= $row['book_title']?></td><td>


       <?php foreach ($row['authors']  as $k=> $v) { ?>

     <?php echo "<a href='index.php?author_id=".$k."'>".$v."</a>" ?>

     <?php } ?>
       </td></tr>
 <?php } ?>

   </table>

<?php include "footer.php"; ?>
