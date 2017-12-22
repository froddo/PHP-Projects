<?php

class Apartment
{
    private $roomNumber;

    public function __construct($roomNumber)
    {
        $this->roomNumber=$roomNumber;
        if ($this->roomNumber < 300 || $this->roomNumber > 399){
            throw new InvalidArgumentException("invalid room number");
        }
    }
    public function getNumber()
    {
       return $this->roomNumber;
    }
}