<?php

$title="index-cost";
include "header.php";
$selectedGroup=[0=>'всички',1=>'храна',2=>'транспорт',3=>'други',4=>'дрехи'];
$group=0;
$files="";
if (isset($_POST['submit'])){
    $group=(int)$_POST['select'];

}
$fileName="food.txt";
if (file_exists($fileName)){
    $files=file($fileName);
}


if (isset($_POST['dell'])){

    $dell=(int)$_POST['hidden'];

    unset($files[$dell]);

   file_put_contents('food.txt', implode('', $files));

}

$sum=0;
$getFiles=[];
foreach ($files as $value) {
    $getFiles[]=array_map('trim', explode(',', $value));
}

?>
    <form method="post" action="">
        <a href="cost.php">Добави по разход</a>
        <select name="select">
            <?php
            foreach ($selectedGroup as $key=>$item) { ?>

                <option <?= $key==$group ? "selected": ""?> value="<?= $key ?>"><?= $item ?></option>

            <?php  } ?>

        </select>
        <input type="submit" name="submit" value="филтрирай">

    </form>
    <table>
        <tr>
        <th>Дата</th>
        <th>Име</th>
        <th>Сума</th>
        <th>Вид</th>
        <th>Изтрий</th>
        <th>Редактирай</th>
        </tr>
            <?php

            if (isset($_POST['submit']) ){
                if ($selectedGroup[$group]==$selectedGroup[0]){
                    header('Location: index-cost.php');
                } else {

                    for ($a=0; $a<count($getFiles); $a++){

                        if ($selectedGroup[$group] == $getFiles[$a][3]){ ?>
                            <tr>
                                <?php for ($b=0; $b<count($getFiles[$a]); $b++){ ?>



                                        <td><?= $getFiles[$a][$b] ?></td>

                                <?php  } ?>
                           <?php $sum+=$getFiles[$a][2] ?>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                      <?php  } ?>


                   <?php } ?>
                    <tr>
                        <td>--</td>
                        <td>--</td>
                        <td><?= number_format($sum,2,'.','') ?></td>
                        <td>--</td>
                        <td>--</td>
                        <td>--</td>
                    </tr>

              <?php  } ?>
           <?php } else {


                        for($i=0; $i<count($getFiles); $i++){ ?>
                            <tr>

                                <?php  for ($k=0; $k<count($getFiles[$i]); $k++){ ?>
                                    <td><?= $getFiles[$i][$k] ?></td>

                                <?php  } ?>
                                <?php $sum+=$getFiles[$i][2] ?>

                                <form method="post" action="">
                                    <input type="hidden" name="hidden" value="<?=$i?>">
                                    <td><input type="submit" name="dell" value="Изтрий"></td>
                                </form>
                                <form method="post" action="edit.php">
                                    <input type="hidden" name="element-id" value="<?=$i?>">
                                    <td><input type="submit" value="Редактирай"></td>
                                </form>
                            </tr>
                        <?php  } ?>
                        <tr>
                            <td>--</td>
                            <td>--</td>
                            <td><?= number_format($sum,2,'.','') ?></td>
                            <td>--</td>
                            <td>--</td>
                            <td>--</td>
                        </tr>
   </table>
            <?php } ?>

<?php
include "footer.php";
?>