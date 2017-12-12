<?php
namespace Shop;
class Battery
{
    protected $battery;
    protected $batteryLife;

    public function __construct($battery,$batteryLife)
    {
        $this->battery=$battery;
        $this->batteryLife=$batteryLife;
    }
}