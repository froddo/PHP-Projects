<?php
$jan=0;$feb=0;$mar=0;$apr=0;$may=0;$jun=0;$jul=0;$aug=0;$sept=0;$oct=0;$nov=0;$dec=0;
$arrayMonth=[];
$arrCount=[];
$number=0;
if (isset($_POST['submit'])){
    $number=$_POST['costs'];
}
for ($n=1;$n<=$number;$n++){

        $dates=date('Y', strtotime(-$n. ('years')));
        $arrayMonth[]=$dates;
}



function randCount(){
    $randomTable=rand(0, 999);
    return $randomTable;
}


?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8" />
    <link href="styles.css" rel="stylesheet">
</head>
<body>

    <form method="post">
        <label for="number of years">Enter number of years:</label>
        <input type="text" name="costs" value="">

        <input type="submit" name="submit" value="Show Costs">
    </form>
    <?php
    if (isset($_POST['submit'])){ ?>
    <table>
    <tr>
        <th>Year</th>
        <th>January</th>
        <th>February</th>
        <th>March</th>
        <th>April</th>
        <th>May</th>
        <th>June</th>
        <th>July</th>
        <th>August</th>
        <th>September</th>
        <th>October</th>
        <th>November</th>
        <th>December</th>
        <th>Total</th>
    </tr>

    <?php foreach ($arrayMonth as $item) { ?>

        <tr>

            <td><?= $item ?></td>
            <td><?= $jan=randCount(); ?></td>
            <td><?= $feb=randCount(); ?></td>
            <td><?= $mar=randCount(); ?></td>
            <td><?= $apr=randCount(); ?></td>
            <td><?= $may=randCount(); ?></td>
            <td><?= $jun=randCount(); ?></td>
            <td><?= $jul=randCount(); ?></td>
            <td><?= $aug=randCount(); ?></td>
            <td><?= $sept=randCount(); ?></td>
            <td><?= $oct=randCount(); ?></td>
            <td><?= $nov=randCount(); ?></td>
            <td><?= $dec=randCount(); ?></td>
            <td><?= $total=$jan+$feb+$mar+$apr+$may+$jun+$jul+$aug+$sept+$oct+$nov+$dec;?></td>
        </tr>
    <?php } ?>

      <?php  } ?>

</table>
</body>
</html>






