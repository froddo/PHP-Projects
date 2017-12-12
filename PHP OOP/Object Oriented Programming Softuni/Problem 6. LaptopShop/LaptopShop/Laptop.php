<?php
namespace Shop;
include "Battery.php";
class Laptop extends Battery
{
    private $model;
    private $manufacturer;
    private $processor;
    private $ram;
    private $graphicsCard;
    private $hdd;
    private $screen;
    private $price;
    private $check;

    public function __construct($model, $manufacturer, $processor, $ram, $graphicsCard, $hdd, $screen, $price, $battery, $batteryLife)
    {
        parent::__construct($battery, $batteryLife);
        $this->check=array($this->model=$model,
        $this->manufacturer=$manufacturer,
        $this->processor=$processor,
        $this->ram=$ram,
        $this->graphicsCard=$graphicsCard,
        $this->hdd=$hdd,
        $this->screen=$screen,
        $this->price=$price,
        $this->battery=$battery,
        $this->batteryLife=$batteryLife);
        foreach ($this->check as $item) {
            if ($item==''){
                throw new \InvalidArgumentException("invalid data");
            }
        }
    }
    public function __toString()
    {
        return "Laptop Info:<br>Model- ".$this->model."<br>Manufacture- ".$this->manufacturer."<br>Processor- ".$this->processor."<br>Ram- ".$this->ram."<br>Graphic Card- ".$this->graphicsCard."<br>HDD- ".$this->hdd."<br>Screen-
        ".$this->screen."<br>Price- ".$this->price."<br>Battery- ".$this->battery."<br>Battery Life- ".$this->batteryLife."<br>";
    }
}