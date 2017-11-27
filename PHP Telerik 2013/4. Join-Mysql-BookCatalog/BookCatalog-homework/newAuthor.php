<?php
$title="newAuthor";
include 'header.php';
mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
mysqli_set_charset($connect,"utf8");
if (!$connect){
    echo "error";
}
$check=true;
if ($_POST) {

    $bookName = trim($_POST['name']);

    if (mb_strlen($bookName) < 2) {
        echo '<p>Името е прекалено късо</p>';
        $check = false;

    }
    if ($check == true) {
        $sql = 'SELECT author_name FROM `authors`';
        $msql = mysqli_query($connect, $sql);
        while ($row = $msql->fetch_assoc()) {

            if ($bookName == $row['author_name']) {

                $check = false;
            }
        }
        if ($check == false) {
            echo '<p>Името на автора съществува в колекцията</p>';
        }
        else {

            $bookName = mysqli_real_escape_string($connect, $bookName);
            $insert = mysqli_query($connect, 'INSERT INTO authors(author_name) VALUES ("' . $bookName . '")');
            mysqli_insert_id($connect);


        }
    }

}

$sq='SELECT * FROM `authors`';
$msq=mysqli_query($connect, $sq);
?>
<a href="index.php">Книги</a>
<form method="post" action="newAuthor.php">
Автор:  <input type="text" name="name">
    <input type="submit" name="submit" value="Добави">
</form><br>


    <table border="1">
        <tr><td>Автори</td></tr>

<?php while ($roww=$msq->fetch_assoc()) { ?>

       <?php  echo "<tr><td><a href='index.php?author_id=".$roww['author_id']."'>".$roww['author_name']."</a></td></tr>" ?>

<?php } ?>
    </table>
<?php
include 'footer.php';
?>