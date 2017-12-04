<?php

class User
{
    private $firstName;
    private $familyName;
    private $age;
    private $profilePicture;
    private $sex;
    private $password;
    private $securityQuestion;
    private $answer;
    private $email;
    private $car;

    function __construct($firstName,$familyName,$age,$profilePicture,$sex,$password,$securityQuestion,$answer,$email,$car)
    {
        $this->firstName=$firstName;
        $this->familyName=$familyName;
        $this->age=$age;
        $this->profilePicture=$profilePicture;
        $this->sex=$sex;
        $this->password=$password;
        $this->securityQuestion=$securityQuestion;
        $this->answer=$answer;
        $this->email=$email;
        $this->car=$car;
    }

    function printUser(){
        echo "<p>First name: {$this->firstName}</p>";
        echo "<p>Family name: {$this->familyName}</p>";
        echo "<p>Age: {$this->age}</p>";
        echo "<p>Profile picture: {$this->profilePicture}</p>";
        echo "<p>Sex: {$this->sex}</p>";
        echo "<p>Password: {$this->password}</p>";
        echo "<p>Security question: {$this->securityQuestion}</p>";
        echo "<p>Answer: {$this->answer}</p>";
        echo "<p>Email: {$this->email}</p>";
        echo "<p>Car: {$this->car}</p>";
    }
}

$user=new User("Ivan","Ivanov","30","MyPicture","Male",
    "qwerty","Who is your favorite sport","soccer","ivan@abv.bg","Toyota Corolla");

$user->printUser();