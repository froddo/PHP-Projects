<?php include "database.php";

    if (isset($_POST['submit'])){
        $question_number = $_POST['question_number'];
        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];

        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = $_POST['choice5'];

        $query = "INSERT INTO questions(question_number, text) VALUES ('$question_number', '$question_text')";

        $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

        if ($insert_row){

            foreach ($choices as $choice => $value) {
                if ($value != ''){
                    if ($correct_choice == $choice){
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }

                    $query = "INSERT INTO choices (question_number, is_correct, text) VALUES ('$question_number', '$is_correct', '$value')";

                    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);

                    if ($insert_row){
                        continue;
                    }else{
                        die('Error : ('.$mysqli->errno.')'.$mysqli->error);
                    }
                }
            }

           $msg = 'Question has been added';

        }
    }



//Get Total questions
$query = "SELECT * FROM questions";
$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $questions->num_rows;
$next = $total+1;

?>

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
        <h2>Add a Question</h2>
        <?php

        if (isset($msg)){
            echo '<p>'.$msg.'</p>';
        }

        ?>
        <form action="add.php" method="post">
            <p>
                <label>Question Number: </label>
                <input type="number" value="<?php echo $next; ?>" name="question_number">
            </p>

            <p>
                <label>Question Text: </label>
                <input type="text" name="question_text">
            </p>

            <p>
                <label>Choice #1: </label>
                <input type="text" name="choice1">
            </p>

            <p>
                <label>Choice #2: </label>
                <input type="text" name="choice2">
            </p>
            <p>
                <label>Choice #3: </label>
                <input type="text" name="choice3">
            </p>
            <p>
                <label>Choice #4: </label>
                <input type="text" name="choice4">
            </p>
            <p>
                <label>Choice #5: </label>
                <input type="text" name="choice5">
            </p>

            <p>
                <label>Correct Choice Number: </label>
                <input type="text" name="correct_choice">
            </p>
            <p>
                <input type="submit" name="submit" value="Submit">
            </p>
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