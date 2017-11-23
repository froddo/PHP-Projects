<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div>
    <table>

        <tr>
            <?php  $year=2017;?>

            <th colspan="4"><?= $year ?></th>
        </tr>

        <tr>
            <td>Януари</td>
            <td>Февруари</td>
            <td>Март</td>
            <td>Април</td>
        </tr>

        <tr>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
        </tr>
        <tr>
            <td>

                <?php
                for ($i=1;$i<=1;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=2;$i<=2;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=3;$i<=3;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=4;$i<=4;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
        </tr>

        <tr>
            <td>Май</td>

            <td>Юни</td>
            <td>Юли</td>
            <td>Август</td>
        </tr>

        <tr>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
        </tr>
        <tr>
            <td>

                <?php
                for ($i=5;$i<=5;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=6;$i<=6;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=7;$i<=7;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=8;$i<=8;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
        </tr>
        <tr>
            <td>Септември</td>

            <td>Октомври</td>
            <td>Ноември</td>
            <td>Декември</td>
        </tr>

        <tr>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
            <td>пн вт ср чт пт сб нд</td>
        </tr>
        <tr>
            <td>

                <?php
                for ($i=9;$i<=9;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=10;$i<=10;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=11;$i<=11;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
            <td>

                <?php
                for ($i=12;$i<=12;$i++){
                    $dataMonths=date("F",strtotime("1.$i.$year"));

                    for ($a=1;$a<=31;$a++){
                        $dataDays=date("D", strtotime("$a.$i.$year"));
                        $checkMonths=date("F", strtotime("$a.$i.$year"));

                        if ($checkMonths != $dataMonths){

                            break;
                        }
                        else{?>
                            <?=$a."\n";?>
                            <?php if ($dataDays == "Sun"){
                                echo '<br>';
                            }
                        }

                    }
                    echo '<br>';
                }
                ?>

            </td>
        </tr>
    </table>
</div>


</body>
</html>






<?php

/*$year=2017;
for ($i=1;$i<=4;$i++){
    $dataMonths=date("F",strtotime("1.$i.$year"));

    for ($a=1;$a<=31;$a++){
        $dataDays=date("D", strtotime("$a.$i.$year"));
        $checkMonths=date("F", strtotime("$a.$i.$year"));

        if ($checkMonths != $dataMonths){

            break;
        }
        else{
            echo $a."\n";
            if ($dataDays == "Sun"){
                echo '<br>';
            }
        }

    }
    echo '<br>';
}*/


