<?php include ('core/init.php');

//Create DB Object
$db = new Database();

//Run query
$db->query("DELETE FROM `contacts` WHERE id = :id");

//Bind values

$db->bind(':id', $_POST['id']);

if ($db->execute()){
    echo "Contact was deleted";
} else {
    echo "Could not delete contact";
}