<!DOCTYPE html>
<html>
<head>
    <title>Coloring Text <?php if (isset($title)) echo htmlentities($title) ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<form method="post">
    <textarea rows="4" cols="50" name="color"></textarea><br>
    <input type="submit" name="submit" value="Color text">
</form>