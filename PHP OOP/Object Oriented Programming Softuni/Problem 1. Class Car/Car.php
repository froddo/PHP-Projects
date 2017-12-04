<?php

class Car
{
    private  $carModel;
    private  $productionYear;
    private  $trademark;
    private  $engineSize;
    private  $price;

    function __construct($carModel,$productionYear,$trademark,$engineSize,$price)
    {
        $this->carModel=$carModel;
        $this->productionYear=$productionYear;
        $this->trademark=$trademark;
        $this->engineSize=$engineSize;
        $this->price=$price;
    }

    function printCar(){
        echo "<p>The car model is: {$this->carModel}, The production year is: {$this->productionYear},
        The trademark is:{$this->trademark}, The engine size is: {$this->engineSize}, The price is: {$this->price}</p>";
    }
}

$car=new Car("Focus ST","2010","Ford","4000","20000");

$car->printCar();