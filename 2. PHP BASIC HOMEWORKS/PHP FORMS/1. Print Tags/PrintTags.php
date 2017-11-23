<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
        <p>Enter Tags:</p>
        <form method="post">
            <input type="text" name="name">
            <input type="submit" name="submit">
        </form>

        <?php

        if (isset($_POST['submit'])){
            $a[]=$_POST['name'];

            foreach ($a as $v){
                $arr=explode(",",$v);
            }
            echo "<br>";
            foreach ($arr as $k=>$vv){
                echo $k."\n".':'."\n".$vv;
                echo '<br>';
            }
        }
        ?>
</body>
</html>









