<?php

class Room
{
    private $roomName;
    private $roomType;
    private $restRoom;
    private $balcony;
    private $extras;
    private $price;
    private $currency;

    public function __construct($name, $type, $rest, $balcony, $extras, $price)
    {
        $this->roomName=$name;
        $this->roomType=$type;
        $this->restRoom=$rest;
        $this->balcony=$balcony;
        $this->extras=$extras;
        $this->price=$price;
    }
    public function currency(){
        setlocale(LC_ALL,'EUR');
        return $this->currency=setlocale(LC_ALL,0);
    }
    public function __toString()
    {
        return "Room Name- ".$this->roomName."<br>
                Room Type- ".$this->roomType."<br>
                Rest Room- ".$this->restRoom."<br>
                Balcony- ".$this->balcony."<br>
                Extras- ".$this->extras."<br>
                Price- ".$this->price." ".$this->currency()."<br>";
    }

}