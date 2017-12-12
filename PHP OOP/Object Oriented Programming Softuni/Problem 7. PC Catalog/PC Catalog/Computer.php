<?php
namespace PcCatalog;
include "Components.php";
class Computer extends Components
{
    private $name;
    private $processorPrice;
    private $graphicsPrice;
    private $motherPrice;
    private $ramPrice;
    private $hddPrice;
    private $currency;
    private $check;
    public function __construct($name,$processor, $graphicsCard, $motherboard, $ram, $hdd)
    {
        parent::__construct($processor, $graphicsCard, $motherboard, $ram, $hdd);
        $this->name=$name;

    }
    public function validate(){
        $this->check=array($this->name,
            $this->processor,
            $this->graphicsCard,
            $this->motherboard,
            $this->ram,
            $this->hdd,
            $this->processorPrice,
            $this->graphicsPrice,
            $this->motherPrice,
            $this->ramPrice,
            $this->hddPrice);
        foreach ($this->check as $item) {
            if ($item==''){
                throw new \InvalidArgumentException("invalid data");
            }
        }
    }
    public function setComponentsPrice($processorPrice, $graphicsPrice, $motherPrice, $ramPrice, $hddPrice){
        $this->processorPrice=$processorPrice;
        $this->graphicsPrice=$graphicsPrice;
        $this->motherPrice=$motherPrice;
        $this->ramPrice=$ramPrice;
        $this->hddPrice=$hddPrice;
    }
    public function getComponentsPrice(){
        $this->processorPrice;
        $this->graphicsPrice;
        $this->motherPrice;
        $this->ramPrice;
        $this->hddPrice;
        return number_format((float)$this->processorPrice + $this->graphicsPrice+$this->motherPrice+$this->ramPrice+$this->hddPrice, 2, '.', '');

    }
    public function setCurrency($currency){
        $this->currency=$currency;

    }
    public function getCurrency(){
        return $this->currency;
    }
    public function __toString()
    {
        return "Computer Info:<br>
                Name- ".$this->name."<br>
                Processor- ".$this->processor.", Price-".$this->processorPrice." ".$this->currency."<br>
                Graphics Card- ".$this->graphicsCard.", Price- ".$this->graphicsPrice." ".$this->currency."<br>
                Motherboard- ".$this->motherboard.", Price- ".$this->motherPrice." ".$this->currency."<br>
                Ram- ".$this->ram.", Price- ".$this->ramPrice." ".$this->currency."<br>
                HDD- ".$this->hdd.", Price- ".$this->hddPrice." ".$this->currency."<br>
                Total Price-".$this->getComponentsPrice()." ".$this->currency."";
    }
}