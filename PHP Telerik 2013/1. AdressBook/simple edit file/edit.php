<?php
$file='food.txt';

if (isset($_POST['edit'])) {

    $postedFile = htmlspecialchars($_POST['put']);


    file_put_contents($file, $postedFile);
    header('Location: index-cost.php');


}
?>
<form method="post" action="">
    <?php $getFile=file_get_contents($file); ?>
    <textarea  rows="10" cols="40" name="put"><?= htmlspecialchars($getFile) ?></textarea>
    <input type="submit" name="edit" value="Save">
</form>

