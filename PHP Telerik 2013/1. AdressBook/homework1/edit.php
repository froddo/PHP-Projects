<?php
$file='food.txt';
$date_added = '';
$burger = '';
$price = '';
$type = '';
$elementId = null;

if (isset($_POST['element-id'])) {
    $elementId = (int)$_POST['element-id'];

    $getFile=file_get_contents($file);

    $entities = explode("\n", $getFile);

    $entities = array_filter($entities);

    if(!in_array($elementId, $entities)) {
        $row = explode(",", $entities[$elementId]);

        if(isset($_POST['edit'])) {
            $row[0] = $_POST['date'];
            $row[1] = $_POST['name'];
            $row[2] = $_POST['sum'];
            $row[3] = $_POST['type'];
            $entities[$elementId] = implode(",", $row);



            file_put_contents($file, (implode("\n", $entities) . "\n"));

            header("Location: index-cost.php");

        } else {
            $date_added = $row[0];
            $burger = $row[1];
            $price = $row[2];
            $type = $row[3];
        }


    } else {
        exit("Eлeментът не е намерен!");
    }



}
?>
<form method="post" action="">
    <input type="hidden" name="element-id" value="<?=$elementId?>">
    Дата: <input type="text" name="date" value="<?=$date_added?>"><br />
    Име: <input type="text" name="name" value="<?=$burger?>"><br />
    Сума: <input type="text" name="sum" value="<?=$price?>"><br />
    Тип: <input type="text" name="type" value="<?= $type?>"><br />
    <input type="submit" name="edit" value="Save">

    <!--

06.11.2017,сандвич,5.80,храна
06.11.2017,риза,25,дрехи
06.11.2017,карате,40,други
06.11.2017,кашкавал,2,храна
06.11.2017,метро,25,транспорт
06.11.2017,влак,12,транспорт
06.11.2017,маратонки,40,дрехи
06.11.2017,плуване,25,други

    -->

</form>

