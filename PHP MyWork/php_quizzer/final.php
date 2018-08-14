<?php session_start();  ?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Quizzer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="container">
        <h1>PHP Quizzer</h1>
    </div>
</header>
<main>
    <div class="container">
        <h2>You are Done!</h2>
        <p>Congrats! You have completed the test</p>
        <p>Final Score: <?php echo $_SESSION['score']; ?></p>
        <a href="question.php?n=1&m=2" class="start">Take Again</a>
    </div>
</main>
<footer>
    <div class="container">
        Copyright &copy; <?php echo date('Y'); ?> PHP Quizzer
    </div>
</footer>
</body>
</html>