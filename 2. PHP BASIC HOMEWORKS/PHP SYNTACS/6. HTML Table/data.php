<!DOCTYPE html>
<head>
    <title></title>
    <meta charset="utf-8 /">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <table>
        <?php foreach ($addArray as $key=>$v){?>
    <tr>
        <td class="color"><?php echo $key?></td>
        <td class="right"><?php echo $v?></td>
    </tr>

<?php }?>
</table>
</body>
</html>