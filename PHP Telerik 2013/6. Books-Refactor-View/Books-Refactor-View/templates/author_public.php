<?php
if (!array_key_exists('authors', $result)){
$result['authors']=array();
}
?>

<form method="post" action="newAuthor.php">
    Автор:  <input type="text" name="name">
    <input type="submit" name="submit" value="Добави">
</form><br>
<table border="1">
    <tr><td>Автори</td></tr>

    <?php foreach ($result['authors'] as $item) { ?>


        <?php  echo "<tr><td><a href='index.php?author_id=".$item['author_id']."'>".$item['author_name']."</a></td></tr>" ?>


    <?php } ?>
</table>