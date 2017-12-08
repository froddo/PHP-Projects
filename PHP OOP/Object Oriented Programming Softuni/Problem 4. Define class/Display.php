<?php
namespace GsmOwner;
include "Battery.php";
class Display extends Battery
{
    private $displaySize;
    private $displayColor;
    private $displayResolution;

    public function setDisplay($size,$color,$resolution){
        $this->displaySize=$size;
        $this->displayColor=$color;
        $this->displayResolution=$resolution;
    }
    public function getDisplay(){
        return "Size: {$this->displaySize}, Color: {$this->displayColor}, Resolution: {$this->displayResolution}";
    }
}
