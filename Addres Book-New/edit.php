<?php
session_start();
$file="tags.txt";
if (isset($_POST['submit'])){
    $postedFile=htmlspecialchars($_POST['editfile']);
    file_put_contents($file,$postedFile);
    header('Location: addData.php');
}
?>

<form method="post" action="">
    <?php $getFile=file_get_contents($file) ?>
    <textarea name="editfile"><?= htmlspecialchars($getFile)?></textarea><br />
    <input type="submit" name="submit" value="Edit Page">
</form>