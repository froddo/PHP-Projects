<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="UTF-8">
</head>
<body>
<form method="post" action="input.php">
    <label for="name">Name:</label>
    <input type="text" name="name"><br>
    <label for="email">Email:</label>
    <input type="text" name="email"><br>
    <label for="phone">Phone:</label>
    <input type="text" name="phone"><br>
    <input type="submit" name="submit" value="Add">

</form>

</body>

</html>

