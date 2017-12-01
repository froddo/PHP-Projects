<?php
if (!array_key_exists('book_title',$_GET)){
    $_GET['book_title']=true;
}
$bookTitle=$_GET['book_title'];
if (!array_key_exists('book_id',$_GET)){
    $_GET['book_id']=true;
}
$bookId=intval($_GET['book_id']);

?>

<form method="post" action="comments.php">
    <input type="hidden" name="hidden" value="<?= $bookId?>">
    User: <input type="text" name="user" value="<?=$add['com']['user_id']?>"><br>
    Book: <input type="text" name="book" value="<?= $bookTitle ?>"><br>
    Comment: <textarea rows="4" cols="30" name="comment"></textarea><br>

    <input type="submit" value="AddComment">
</form>