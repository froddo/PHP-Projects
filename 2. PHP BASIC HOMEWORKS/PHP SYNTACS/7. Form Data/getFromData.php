<?php
include 'data.php';

if(isset($_POST["gender"])) {
    $gender = $_POST["gender"];

    if ($gender == "male") { ?>
        My name is <?php echo htmlentities($_POST["name"]) . '.' ?>
        I am <?php echo htmlentities($_POST["age"]) ?> years old.
        I am <?php echo htmlentities($_POST["gender"]) . '.' ?>

    <?php } elseif ($gender == "female") { ?>
        My name is <?php echo htmlentities($_POST["name"]) . '.' ?>
        I am <?php echo htmlentities($_POST["age"]) ?> years old.
        I am <?php echo htmlentities($_POST["gender"]) . '.' ?>
    <?php }else{
        echo "Please enter a valid Gender!";
    }
}
else{
   if (isset($_POST["submit"])){
       echo "Please enter a valid Gender!";
   }
}?>





