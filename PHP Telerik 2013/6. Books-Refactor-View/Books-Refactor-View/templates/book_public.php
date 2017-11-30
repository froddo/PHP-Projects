<form method="post" action="newBook.php">
    Име на книгата: <input type="text" name="name"><br>
    Търсене на книга: <input type="text" name="search"><br>
    <div><input type="submit" name="find" value="Search"></div><br>
    <select name="group[]" multiple>
        <?php foreach ($result['book'] as $key => $index) { ?>
            <option value="<?= $key ?>"><?= $index ?></option>
        <?php } ?>
    </select>
    <input type="submit" value="Добави">
</form>