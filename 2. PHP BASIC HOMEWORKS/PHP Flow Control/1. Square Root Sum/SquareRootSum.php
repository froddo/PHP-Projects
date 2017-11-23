<?php


for ($i=0; $i<=100; $i++){
    if ($i % 2==0){
        $evenNumbers[]=$i;
        $scuareRootNum[]=sqrt($i);
    }
}

foreach ($scuareRootNum as $item) {
    $scuareRootFloat[]=round($item, 2);
}
$result=array_combine($evenNumbers, $scuareRootFloat);
$arraySum=array_sum($scuareRootFloat);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" >
    <title></title>
    <meta charset="UTF-8" />
</head>
<body>
    <table>
        <tr>
            <th>Number</th>
            <th>Square</th>
        </tr>
    <?php foreach ($result as $key=>$v) { ?>
    <tr>
            <td><?= $key ?></td>
            <td><?= $v ?></td>
    </tr>
   <?php } ?>

       <tr>
           <th>Total:</th>
           <td><?= $arraySum ?></td>
       </tr>
    </table>
</body>
</html>

