<?php
include ("core/init.php");

$db = new Database();
//Sanitize Post
$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

$password = md5($post['password']);

if ($post['submit']){
    //Check if email exist in DB
    $db->query("SELECT * FROM `user` WHERE email = :email");
    $db->bind(':email', $post['email']);

    $row = $db->single();
    if ($row){
        $error = "The email exist";
        header('Location: register.php?error='.urlencode($error));
    } else {
    	//Register new user
        $db->query("INSERT INTO `user`(username, email, password) VALUES (:username, :email, :password)");

        $db->bind(':username', $post['username']);
        $db->bind('email', $post['email']);
        $db->bind('password', $password);
        $db->execute();

        if ($db->lastInsertId()){
            header('Location: login.php');
        } else {
            echo "Could not add contact";
        }
    }
}

