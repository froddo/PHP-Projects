<!DOCTYPE html>
<html>
<head>
    <title>Sum</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form method="post">
        <label for="sum">Input string:</label>
        <input type="text" name="name">
        <input type="submit" name="submit" value="Submit">
    </form>
    <table border="1">
    <?php if (isset($_POST['submit'])) { ?>
        <?php $inputString=$_POST['name'];
        $expString=explode(',', $inputString); ?>
    <?php foreach ($expString as $item) { ?>
       <?php $sum=array_sum(str_split($item));

        if ($sum==is_numeric($sum)){?>
        <tr>
                <td><?= $item ?></td>
                <td><?= $sum ?></td>
        </tr>
         <?php   } else { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= "I cannot sum that" ?></td>
            </tr>
           <?php }?>


   <?php } ?>
        <?php } ?>
    </table>
</body>
</html>






