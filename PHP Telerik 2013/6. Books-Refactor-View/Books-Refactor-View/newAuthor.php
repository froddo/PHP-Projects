<?php
include 'include/function.php';
if ($_POST) {
    $check=true;
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
$result=[];
while ($roww=$msq->fetch_assoc()) {

    $result['authors'][]=$roww;
}
if (count($result)==0){
    echo '<p>Моля въведете автор</p>';
}

$result['title']='Нов автор';
$result['header']='templates/authorHeader_public.php';
$result['content']='templates/author_public.php';
render($result,'templates/layouts/normal_layout.php');

