<?php
if (!array_key_exists('author',$add)){
    $add['author']=array();
}
?>

<form method="post" action="newAuthor.php"><br>
    Author: <input type="text" name="author">
    <input type="submit" name="Submit">
</form><br>
<table border="1">
    <tr><th>Authors</th></tr>
    <?php foreach ($add['author'] as $item) { ?>

        <?php echo "<tr><td><a href='allBooks.php?author_id=".$item['author_id']."'>".$item['author_name']."</a></td></tr>" ?>

    <?php } ?>

</table>