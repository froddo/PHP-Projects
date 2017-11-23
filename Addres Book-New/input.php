<?php
session_start();
include "header.php";
if (isset($_POST['submit'])) {
    echo '<a href="logout.php">Logout</a>   <a href="addMore.php">Add-More</a>   <a href="edit.php">Edit</a><br />';
    echo '<br />';

    $expl=[];
    $name = htmlentities(trim($_POST['name']));
    $email = htmlentities(trim($_POST['email']));
    $phone = htmlentities(trim($_POST['phone']));
    if (strlen($name)>2 && strlen($email)>5 && strlen($phone)>5){
        file_put_contents('tags.txt', $name . ";", FILE_APPEND);

        file_put_contents('tags.txt', $email . ";", FILE_APPEND);

        file_put_contents('tags.txt', $phone . ";\n", FILE_APPEND);

        $allData = file('tags.txt');
        foreach ($allData as $item) {
            $expl[] = explode(';', $item);
        }
    } else {


        echo "Please insert correct-name,email,phone";
        echo exit();
    }


}
?>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
<?php  if(isset($_POST['submit'])){ ?>
    <?php for ($i=0; $i<count($expl); $i++){ ?>
        <tr>
            <?php for ($a=0; $a< count($expl[0])-1; $a++){ ?>


                <td><?=$expl[$i][$a]?></td>


            <?php } ?>
        </tr>
    <?php } ?>
<?php } ?>
</table>
<?php include "footer.php" ?>



