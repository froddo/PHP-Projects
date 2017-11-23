<!DOCTYPE html>
<html>
<head>
    <title>URL Text</title>
    <meta charset="UTF-8" />
</head>
<body>
    <form method="post">
        <textarea rows="5" cols="50" name="text"></textarea><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


<?php
if (isset($_POST['submit'])){

$text=$_POST['text'];


$replace=str_replace("<p>Come and visit <a href=\"http://softuni.bg\">the Software University</a> to master the art of programming. You can always check our <a href=\"www.softuni.bg/forum\">forum</a> if you have any questions.</p>","<p>Come and visit [URL=http://softuni.bg]the Software University[/URL] to master the art of programming. You can always check our [URL=www.softuni.bg/forum]forum[/URL] if you have any questions.</p>",$text);
$result=htmlentities($replace);
echo $result;
}
?>



