<?php

class Bedroom
{
    private $roomNumber;

    public function __construct($roomNumber)
    {
        $this->roomNumber=$roomNumber;
        if ($this->roomNumber < 200 || $this->roomNumber > 299){
            throw new InvalidArgumentException("invalid room number");
        }
    }
    public function getNumber()
    {
        return $this->roomNumber;
    }
}