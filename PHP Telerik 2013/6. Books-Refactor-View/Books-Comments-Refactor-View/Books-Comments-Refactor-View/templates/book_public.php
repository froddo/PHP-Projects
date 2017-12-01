<?php
if (!array_key_exists('book',$add)){
    $add['book']=array();
}

?>

<form method="post" action="newBook.php">
    Name of the book: <input type="text" name="book"><br>
    <select name="select[]" multiple>
        <?php foreach ($add['book'] as $it) { ?>

            <option value="<?= $it['author_id'] ?>"><?= $it['author_name'] ?></option>

        <?php } ?>

    </select><br>
    <input type="submit" value="Submit">
</form>