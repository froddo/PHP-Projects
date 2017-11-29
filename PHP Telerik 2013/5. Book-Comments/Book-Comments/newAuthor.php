<?php
session_start();
$title="newAuthor";
include "header.php";

mb_internal_encoding('utf-8');
$connect=mysqli_connect('127.0.0.1','topalovr','qwerty','books');
mysqli_set_charset($connect,'utf8');
if (!$connect){
  echo  '<p>no connect</p>';
}
$check=true;
$con=false;
$sqq='SELECT * FROM saved_user';
$msqq=mysqli_query($connect, $sqq);
while ($rowss=$msqq->fetch_assoc()){
    $con=true;
}
if ($con==false){
    header('Location: login.php');
}
if ($_POST){
    $author=trim($_POST['author']);

    if (mb_strlen($author)< 2){
        echo  '<p>The name is short</p>';
        $check=false;
    }
    if ($check == true){
        $author=mysqli_real_escape_string($connect, $author);
        $sql='SELECT author_name FROM authors';
        $msql=mysqli_query($connect, $sql);
        while ($row=$msql->fetch_assoc()){
            if ($row['author_name'] == $author){
                $check=false;
            }
        }
        if ($check == false){
            echo  '<p>Author name is exist</p>';
        }
        else if ($check == true){
            $sq='INSERT INTO authors (author_name) VALUES ("'.$author.'")';
            $mq=mysqli_query($connect,$sq);
            mysqli_insert_id($connect);
            if (!$mq){
                echo  '<p>Error record</p>';
            }
            else{
                echo  '<p>Author is added</p>';
            }

        }
    }
}

$sqq='SELECT * FROM authors';
$msq=mysqli_query($connect, $sqq);

?>
<a href="logout.php">Logout</a>
<a href="allBooks.php">AllBooks</a>
<form method="post" action="newAuthor.php"><br>
Author: <input type="text" name="author">
    <input type="submit" name="Submit">
</form><br>
    <table>
        <tr><th>Authors</th></tr>
        <?php while ($rows=$msq->fetch_assoc()) { ?>

      <?php echo "<tr><td><a href='allBooks.php?author_id=".$rows['author_id']."'>".$rows['author_name']."</a></td></tr>" ?>

        <?php } ?>

    </table>

<?php

include "footer.php";