<?php
$title="newBook";
include 'header.php';
mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
if (!$connect){
    echo '<p>no connect</p>';
}
mysqli_set_charset($connect,"utf8");
$bookCheck=false;
$check=true;
$add=[];
$cql='SELECT * FROM authors';

$msql=mysqli_query($connect,$cql);

while ($row=$msql->fetch_assoc()){
    $add[$row['author_id']]=$row['author_name'];

}
if (isset($_POST['find'])){
    $search=trim($_POST['search']);
    $search=mysqli_real_escape_string($connect,$search);
    $q=mysqli_query($connect,'SELECT `book_title` FROM `books` WHERE book_title="'.$search.'" ');
    while ($row=$q->fetch_assoc()){
        if ($row['book_title']){
            echo '<p>The book exist</p>';
        }
        $bookCheck=true;

    }
    if ($bookCheck==false){
        echo '<p>The book does not exist</p>';
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


?>
<a href="index.php">Книги</a>
<form method="post" action="newBook.php">
    Име на книгата: <input type="text" name="name"><br>
    Търсене на книга: <input type="text" name="search"><br>
    <div><input type="submit" name="find" value="Search"></div><br>
    <select name="group[]" multiple>
      <?php foreach ($add as $key => $index) { ?>
          <option value="<?= $key ?>"><?= $index ?></option>
     <?php } ?>
    </select>
    <input type="submit" value="Добави">
</form>


<?php
include 'footer.php';
?>
