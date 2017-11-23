<!DOCTYPE html>
<html>
<head>
    <title>Word Mapping</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form method="post">
    <textarea rows="4" cols="50" name="mapping"></textarea><br>
    <input type="submit" name="submit" value="Count Words">
    <table border="1">
        <?php if(isset($_POST['submit'])){?>
            <?php foreach ($count as $key=>$val) { ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $val?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </table>
</form>
</body>
</html>