<?php
namespace PcCatalog;

class Components
{
    protected $processor;
    protected $graphicsCard;
    protected $motherboard;
    protected $ram;
    protected $hdd;

    public function __construct ($processor,$graphicsCard,$motherboard,$ram,$hdd){
        $this->processor=$processor;
        $this->graphicsCard=$graphicsCard;
        $this->motherboard=$motherboard;
        $this->ram=$ram;
        $this->hdd=$hdd;

    }
    public function getInfo(){
        $this->processor;
        $this->graphicsCard;
        $this->motherboard;
        $this->ram;
        $this->hdd;
    }
}