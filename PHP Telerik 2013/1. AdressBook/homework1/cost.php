<?php
mb_internal_encoding('utf-8');
$title="Cost";
include "header.php";

$group=1;
$selectedGroup=[1=>"храна",2=>"транспорт",3=>"други",4=>"дрехи"];
if (isset($_POST['submit'])){




    $date=date('d.m.Y');
    $name=trim($_POST['name']);
    $sum=(float)($_POST['sum']);
    $group=(int)$_POST['select'];


    $checkName=true;
    if(strpos($name,',')!==false){


        $checkName=false;
    }


    if (mb_strlen($name) > 3 && ($sum) > 0 && $checkName){




        $file='food.txt';
        $put="$date,$name,$sum,$selectedGroup[$group]".PHP_EOL;
        file_put_contents($file, $put,FILE_APPEND);


        echo "Записът е успешен";
    }
    else {
        echo "Невалидно име или сума";
    }
}
?>
<a href="index-cost.php">Cписък</a>
<form method="post" action="">
    Име: <input type="text" name="name"><br />
    Сума: <input type="text" name="sum"><br />
    Вид: <select name="select">
        <?php
        foreach ($selectedGroup as $key=>$item) { ?>
            <option <?= $key==$group ? "selected" : ""?> value="<?= $key ?>"><?= $item ?></option>
        <?php } ?>
    </select>
    <input type="submit" name="submit" value="Добави">
</form>
<?php
include "footer.php";
?>







