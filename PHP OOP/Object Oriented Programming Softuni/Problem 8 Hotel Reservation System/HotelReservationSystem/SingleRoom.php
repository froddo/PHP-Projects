<?php

class SingleRoom
{
    private $roomNumber;

    public function __construct($roomNumber)
    {
        $this->roomNumber=$roomNumber;
        if ($this->roomNumber < 100 || $this->roomNumber > 199){
            throw new InvalidArgumentException("invalid room number");
        }
    }

    public function getNumber(){
        return $this->roomNumber;
    }

}

