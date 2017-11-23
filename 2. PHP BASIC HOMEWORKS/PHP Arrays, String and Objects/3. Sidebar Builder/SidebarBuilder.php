<?php header("Content-Type: text/html; charset=utf8") ?>
<!DOCTYPE html>
<html>
<head>
    <title>
    <?php if (isset($title)) echo htmlentities($title) ?>
    Sidebar Builder
    </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <form action="sideOne.php" method="post">
        <label for="categories">Categories:</label>
        <input type="text" name="categories" /><br>
        <label for="tags">Tags:</label>
        <input type="text" name="tags" /><br>
        <label for="months">Months:</label>
        <input type="text" name="months" /><br>
        <input type="submit" name="submit" value="Generate">
    </form>












