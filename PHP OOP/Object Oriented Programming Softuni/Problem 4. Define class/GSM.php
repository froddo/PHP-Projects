<?php

namespace gsmOwner;
include "Display.php";
class GSM extends Display
{
    private $mobilePhone;
    private $owner;
    private $phonePrice;
    private $manufacturer;

    public function setGsm($phone,$owner,$price,$manufacturer){
        $this->mobilePhone=$phone;
        $this->owner=$owner;
        $this->phonePrice=$price;
        $this->manufacturer=$manufacturer;
    }
    public function getGsm(){
        return "Phone: {$this->mobilePhone}, Owner: {$this->owner}, Price: {$this->phonePrice}, Manufacturer: {$this->manufacturer}";
    }
}

