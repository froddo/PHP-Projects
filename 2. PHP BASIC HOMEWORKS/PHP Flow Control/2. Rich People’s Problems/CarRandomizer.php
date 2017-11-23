<?php

if (isset($_POST['submit'])) {

    $car = $_POST['text'];
    $explodeCars = explode(',', $car);

}

$carsColor=[1=>'yellow', 2=>'green',3=>'black',4=>'red',5=>'blue'];
$rand=rand(1,5);
$colorRand=$carsColor[$rand];

randoms($rand);

colorsR($rand);

function colorsR($rand){
    $carsColor=[1=>'yellow', 2=>'green',3=>'black',4=>'red',5=>'blue'];
    $rand=rand(1,5);
    $colorRand=$carsColor[$rand];
    return $colorRand;
}
function randoms($rand){
    $rand=rand(1,5);
    return $rand;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" >
</head>
<body>
<form  action="" method="post">
    <label for="cars">Enter Cars</label>
    <input type="text" name="text">
    <input type="submit" name="submit" value="Show Result">
</form>
<?php if (isset($_POST['submit'])) { ?>
    <table border="1">
        <tr>
            <th>Car</th>
            <th>Color</th>
            <th>Count</th>

        </tr>
        <?php foreach ($explodeCars as $carss) { ?>
        <tr>
            <td><?= $carss; ?></td>
            <td><?= colorsR($colorRand); ?></td>
            <td><?= randoms($rand); ?></td>
        </tr>
    <?php } ?>

    </table>
<?php } ?>
</body>
</html>




