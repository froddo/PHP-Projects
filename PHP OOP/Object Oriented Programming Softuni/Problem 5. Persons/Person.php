<?php

class Person extends Child
{
    protected $email;

    public function __construct($name, $age, $email)
    {
        parent::__construct($name, $age);
        $this->email=$email;
    }

    public function __toString()
    {
        return "Person(".$this->name.",".$this->age.",".$this->email.")";
    }
}