<?php


class Workman
{
    private $firstName;
    private $familyName;
    private $age;
    private $profilePicture;
    private $sex;
    private $securityQuestion;
    private $answer;
    private $car;
    private $profession;
    private $payment;

    public function setUser($name,$fName,$age,$picture,$sex,$security,$answer,$car,$profession,$payment){
        $this->firstName=$name;
        $this->familyName=$fName;
        $this->age=$age;
        $this->profilePicture=$picture;
        $this->sex=$sex;
        $this->securityQuestion=$security;
        $this->answer=$answer;
        $this->car=$car;
        $this->profession=$profession;
        $this->payment=$payment;
    }
    public function getUser(){
        $info= "Name-$this->firstName,LastName- $this->familyName,Age- $this->age,Picture- $this->profilePicture,Sex- $this->sex,Security- $this->securityQuestion,
        Answer- $this->answer,Car- $this->car,Profession- $this->profession, Payment- $this->payment";
        return $info;
    }

}
$man= new Workman();
$man->setUser("Ivan","Ivanov","23","MyPicture","Male","favorite sport","soccer","BMW","Programmer","100");
echo $man->getUser();
