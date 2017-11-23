<?php
session_start();
echo '<a href="logout.php">Logout</a>   <a href="addMore.php">Add-More</a>   <a href="edit.php">Edit</a><br />';
echo '<br />';
$expl=[];

$allData = file('tags.txt');
foreach ($allData as $item) {
    $expl[] = explode(';', $item);
}


?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

        <?php for ($i=0; $i<count($expl); $i++){ ?>
            <tr>
                <?php for ($a=0; $a< count($expl[0])-1; $a++){ ?>


                    <td><?=$expl[$i][$a]?></td>


                <?php } ?>
            </tr>
        <?php } ?>

</table>


</body>

</html>
