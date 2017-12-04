<?php

class User
{
    private $name;
    private $lastName;
    private $age;
    private $email;
    private static $number=0;

    public static function countAddUser (){
        echo "<p>The call users are " .self::$number. "</p>";
    }

    function __construct($name,$lastName,$age,$email)
    {
        self::$number++;
        $this->name=$name;
        $this->lastName=$lastName;
        $this->age=$age;
        $this->email=$email;

    }

    function printUser (){
        echo "<p> My name is $this->name $this->lastName. I am $this->age years old and my e-mail is $this->email </p>";
    }


}

class Job extends User
{
    private $work;

    public function __construct($name,$lastName,$age,$email,$work)
    {
        parent::__construct($name,$lastName,$age,$email);
        $this->work= $work;
    }

    public function printUser()
    {
        parent::printUser();
        echo "and my job is $this->work";
    }
}

$user= new Job("Rumen","Topalov","33","rumen@abv.bg","Policeman");
$user->printUser();

$user1= new Job("Plamen","Ivanov","25","plamen@abv.bg","Sales Person");
$user1->printUser();

$user2= new Job("Gogo","Dimitrov","30","gogo@mail.bg","Driver");
$user2->printUser();
User::countAddUser();