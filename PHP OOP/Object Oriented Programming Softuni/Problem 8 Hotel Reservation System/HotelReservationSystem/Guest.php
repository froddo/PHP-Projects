<?php

class Guest
{
    private $firstName;
    private $lastName;
    private $id;
    private $arr=[];
    public function __construct($firstName, $lastName, $id)
    {
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->id=$id;
    }
    public function getInfo(){
       $this->arr= [$this->firstName,
        $this->lastName,
        $this->id];
       return $this->arr;
    }
}