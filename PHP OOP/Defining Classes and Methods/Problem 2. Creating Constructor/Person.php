<?php

class Person
{
    private $name;
    private $age;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function getInfo(){
      echo  $this->name." ".$this->age."<br>";
    }
}
$person=new Person("Pesho",20);
$person->getInfo();


$person1=new Person("Gosho",18);
$person1->getInfo();

$person2=new Person("Stamat",45);
$person2->getInfo();