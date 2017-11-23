<!DOCTYPE html>
<html>
   <head>
       <title>Enter</title>
       <meta charset="UTF-8" />
   </head>
<body>
<form method="post">
    Start Index: <input type="text" name="start"/>
    End: <input type="text" name="end"/>
    <input type="submit" name="submit" value="Submit"/>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])){

    $startNum=$_POST['start'];
    $endNum=$_POST['end'];
    $counter=0;

    $counterRow=0;
    for ($a=$startNum;$a<=$endNum;$a++){
        $counterRow++;
        for ($i=1;$i<=$a;$i++){

            if ($a % $i==0) {
                $counter++;
            }
        }
        if ($counter == 2) {

            $counter = 0;
            echo '<b>'.$a.'</b>';
            if ($endNum==$a){
                break;
            } else {
                echo ','."\n";
            }
        } else {
            $counter=0;
            echo $a;
            if ($endNum==$a){
                break;
            } else {
                echo ','."\n";
            }

        }
        if ($counterRow == 30){
            echo '<br>';
            $counterRow=0;
        }
    }
}
?>