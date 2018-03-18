<?php
include ("core/init.php");

$db = new Database();

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$password = md5($post['password']);

if(isset($post['submit'])){
    //Compare Login
    $db->query("SELECT * FROM `user` WHERE email = :email AND password = :password");
    $db->bind(':email', $_POST['email']);
    $db->bind(':password', $password);

    $row = $db->single();

    if ($row){
            header('Location: index.php');
    } else {

        $error = 'Incorrect email or password';
        header('Location: login.php?error='.urlencode($error));
    }

}