<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <title>Address Book</title>
    <meta charset="UTF-8" />
</head>
<body>
    <form method="post" action="register.php">
        <label for="name">Name:</label>
        <input type="name" name="name"><br>
        <label for="password">Password:</label>
        <input type="password" name="pass"><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>