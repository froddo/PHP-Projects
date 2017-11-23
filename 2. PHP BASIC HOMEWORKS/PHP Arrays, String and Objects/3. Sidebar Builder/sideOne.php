<?php

if (isset($_POST['submit'])){
    $categories=$_POST['categories'];
    $categExplde = array_map('trim', explode(',', $categories));
    $tags=$_POST['tags'];
    $tagsExplode= array_map('trim', explode(',', $tags));
    $months=$_POST['months'];
    $monthsExplode=array_map('trim',explode(',', $months));
}?>
    <link rel="stylesheet" type="text/css" href="styles.css">
<div id="header">
<h2>Categories</h2>
<ul>


        <?php if (isset($_POST['submit'])) {?>
        <?php foreach ($categExplde as $item) { ?>
            <li><?= $item ?></li>
        <?php }?>


</ul>
</div>
    <div id="middle">

<h2>Tags</h2>

<ul>

        <?php foreach ($tagsExplode as $value) { ?>
            <li class="b"><?= $value ?></li>
        <?php  }?>


</ul>
    </div>
    <div id="footer">
<h2>Months</h2>
<ul>

        <?php foreach ($monthsExplode as $v) { ?>
            <li class="c"><?= $v ?></li>
        <?php }?>
        <?php }?>

</ul>
</div>
<?php include "sideTwo.php" ?>