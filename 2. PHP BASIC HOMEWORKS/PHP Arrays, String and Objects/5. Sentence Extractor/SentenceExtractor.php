<!DOCTYPE html>
<html>
<head>
    <title>Sentence Extractor</title>
    <meta charset="UTF-8" />
</head>
<body>
<form method="post">
    <textarea rows="5" cols="35" name="text"></textarea><br>
    <input type="text" name="word"><br>
    <input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])){
    $text=$_POST['text'];
    $is=$_POST['word'];

    $patt="/(?:^|\.)\K.*?(?=$is)[^\.]*\./";


    $res=preg_match_all($patt,$text,$str);

    echo $str[0][0];
}
