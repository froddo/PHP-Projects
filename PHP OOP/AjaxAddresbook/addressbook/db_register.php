<?php
include ("core/init.php");

$db = new Database();
//Sanitize Post
$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

$password = md5($post['password']);

if ($post['submit']){
    //Insert into MySql
    $db->query("SELECT * FROM `user` WHERE email = :email");
    $db->bind(':email', $_POST['email']);

    $row = $db->single();
    if ($row){
        $error = "Email exist";
        header('Location: register.php?error='.urlencode($error));
    } else {
        $db->query("INSERT INTO `user`(username, email, password) VALUES (:username, :email, :password)");

        $db->bind(':username', $_POST['username']);
        $db->bind('email', $_POST['email']);
        $db->bind('password', $password);
        $db->execute();

        if ($db->lastInsertId()){
            header('Location: login.php');
        } else {
            echo "Could not add contact";
        }
    }
}

