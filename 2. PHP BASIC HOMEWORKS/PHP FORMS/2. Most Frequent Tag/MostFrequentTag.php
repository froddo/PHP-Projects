<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="UTF-8" />
</head>
<body>
<p>Enter Tags:</p>
    <form method="post">
        <input type="text" name="text">
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])){
    $arr[]=$_POST['text'];
    foreach ($arr as $v){
        $names=explode(",", $v);
    }
    $result=(array_count_values($names));
    asort($result);
    $reverse=array_reverse($result);
    $count="times";
    foreach ($reverse as $k=>$vv){
        echo $k.":".$vv."\n".$count;
        echo '<br>';
    }
    $val=array_search(max($result),$result);
    echo "Most Frecuent Tag is:"."\n".$val;
}

?>



