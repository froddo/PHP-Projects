<?php

class Person
{
    private $name;
    private $age;
    private $data=[];
    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
    }
    public function getInfo(){
      echo  $this->name." ";
      echo  $this->age;

    }
    public function Set($name,$age){
        $this->data=[$this->name=$name,$this->age=$age];
    }
    public function Get(){
            echo "<br>Count:";
        return $this->data=[$this->name,$this->age];

    }
}
$person=new Person("Pesho",20);
$person->getInfo();
echo count($person->Get());
echo "<br>";
$person1= new Person("Gosho",18);
$person1->getInfo();
echo count($person1->Get());
echo "<br>";
$person2=new Person("Stamat",43);
$person2->getInfo();
echo count($person2->Get());