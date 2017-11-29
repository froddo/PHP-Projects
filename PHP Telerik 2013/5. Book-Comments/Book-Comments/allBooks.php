<?php
session_start();
$title="allBooks";
include "header.php";
if (!array_key_exists('login',$_SESSION)){
    $_SESSION['login']=0;
}
$_SESSION['login']+=1;
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
   echo '<p>no connection</p>';
}
mysqli_set_charset($connect,'utf8');
$authorCheck=false;
$bookCheck=false;
$add=[];
$addComment=[];
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
            $addComment[]=$rows;
        }
    }

    while ($row=$msq->fetch_assoc()){
        $add[$row['book_id']]['book_title']=$row['book_title'];
        $add[$row['book_id']]['authors'][$row['author_id']]=$row['author_name'];
    }
}
?>
<a href="logout.php">Logout</a>
<a href="newAuthor.php">AddAuthor</a>
<a href="newBook.php">AddBook</a>
<a href="allBooks.php">AllBooks</a>
<br><br>
<?php if($authorCheck == false){ ?>
<table>
    <tr><th colspan="2">Select Authors</th></tr>
    <tr>
        <th>Books</th>
        <th>Authors</th>
    </tr>

    <?php foreach ($add as $item) { ?>

        <tr><td><?= $item['book_title']?></td><td>

        <?php foreach ($item['authors'] as $key=> $it) { ?>
                <?php echo "<a href='allBooks.php?author_id=".$key."'>".$it."</a>" ?>
        <?php } ?>
            </td></tr>
  <?php } ?>

</table>
<?php } ?>
<br>
<?php if($bookCheck == false){ ?>
    <table>
        <tr><th rowspan="100">Add a comment to a book</th></tr>

        <?php foreach ($add as $k=> $value) { ?>

            <?php echo "<tr><td><a href='comments.php?book_id=".$k."&book_title=".$value['book_title']."'>".$value['book_title']."</a></td></tr>" ?>
        <?php } ?>

    </table>

<?php } ?>
<br>
<?php if($bookCheck == false){ ?>
<table>
   <tr><th colspan="2">Select Books</th></tr>
    <tr>
        <th>Books</th>
        <th>Authors</th>
    </tr>

    <?php foreach ($add as $kk=> $val) { ?>

        <tr><td><?php echo "<a href='allBooks.php?book_id=".$kk."'>".$val['book_title']."</a>" ?></td><td>
            <?php foreach ($val['authors'] as $author) { ?>
                    <?= $author ?>

            <?php } ?>
        </td></tr>
        <?php } ?>

</table>

<?php } ?>
<br>
<?php if($bookCheck == false){ ?>
<table>
    <tr><th colspan="4">See Comments</th></tr>
    <tr>
        <th>Name</th>
        <th>Selected Books</th>
        <th>Comments</th>
        <th>Data</th>
    </tr>

        <?php foreach ($addComment as $get) {
            $counter=1;
            ?>

            <tr>
            <?php foreach ($get as $vv) { ?>
                    <?php
                    if ($counter==1){
                    echo  "<td><a href='commentsUser.php?user=".$vv."'>$vv</a></td>";
                        $counter=0;
                        continue;
                    }
                    foreach ($add as $kkk=> $i) {

                        foreach ($i as $ite) {
                           if ($ite==$vv) {
                               echo "<td><a href='allBooks.php?book_id=".$kkk."'>$vv</a></td>";
                               $counter=2;
                               continue;
                           }

                        }

                    }
                    if ($counter==2){
                        $counter=0;
                    }
                    else{
                        echo   "<td>".$vv."</td>";
                    }

                    ?>

            <?php } ?>
            </tr>
        <?php } ?>
</table>
<?php } ?>
<?php
include "footer.php";



































