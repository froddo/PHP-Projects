<?php include 'database.php'; ?>
<?php if (isset($_GET['m'])){
   session_start();
   session_destroy();

}
?>
<?php session_start();  ?>
<?php

    $number = (int) $_GET['n'];

    //Get Total questions
    $query = "SELECT * FROM questions";
    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $results->num_rows;

    // Get question
    $query = "SELECT * FROM questions WHERE question_number = $number";

    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);

    $question = $result->fetch_assoc();

    // Get choices
    $query = "SELECT * FROM choices WHERE question_number = $number";

    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

?>
<!doctype html>
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
        <div class="current">
            Question <?php echo $question['question_number']; ?> of <?php echo $total; ?>
        </div>
        <p class="question">
            <?php echo $question['text']; ?>
        </p>
        <form action="process.php" method="post">
            <ul class="choices">
                <?php while ($row = $choices->fetch_assoc()):  ?>
                    <li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['text']; ?></li>
                <?php endwhile; ?>
            </ul>
            <input type="submit" name="submit" value="Submit">
            <input type="hidden" name="number" value="<?php echo $number; ?>">
        </form>
    </div>
</main>
<footer>
    <div class="container">
        Copyright &copy; <?php echo date('Y'); ?> PHP Quizzer
    </div>
</footer>
</body>
</html>