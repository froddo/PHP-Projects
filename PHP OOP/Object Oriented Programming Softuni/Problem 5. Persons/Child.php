<?php

class Child
{
    protected $name;
    protected $age;

    public function __construct($name,$age)
    {
        $this->name=$name;
        $this->age=$age;
        if ($this->age < 1 || $this->age > 100){
            throw new InvalidArgumentException("invalid age");
        }
    }
    public function __toString()
    {
        return "Child(".$this->name.",".$this->age.")";
    }

}