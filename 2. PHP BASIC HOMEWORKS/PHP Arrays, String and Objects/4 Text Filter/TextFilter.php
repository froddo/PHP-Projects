<?php header("Content-Type: text/html; charset=utf8") ?>
<!DOCTYPE html>
<html>
<head>
    <title>
        <?php if (isset($title)) echo htmlentities($title)?>
        Text Filter
    </title>
</head>
<body>
    <form method="post">
        <textarea rows="4" cols="50" name="textfilter"></textarea><br>
        <input type="text" name="bannedtext"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


<?php

if (isset($_POST['submit'])){
    $takeText=[];
    $countStars=[];
    $text = $_POST['textfilter'];
    $bannedText=$_POST['bannedtext'];
    $textExplode=array_map('trim',explode(',', $bannedText));

    foreach ($textExplode as $item) {
        $takeText[]="/$item/";
    }
    foreach ($textExplode as $it) {
        $countStars[] = str_repeat('*', strlen($it));

    }
    $pattern=$takeText;
    $change=$countStars;
    $replace=preg_replace($pattern,$change,$text);
    echo $replace;
}
?>













