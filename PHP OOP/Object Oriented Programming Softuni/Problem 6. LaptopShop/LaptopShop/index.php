<?php
namespace Shop;
include "Laptop.php";
try{
    $laptop = new Laptop("Lenovo Yoga 2 Pro",
        "Lenovo","Intel core I5","8GB","Intel HD Graphics 4400","128GB SSD","13.3 IPS",
        "2259.00 lv","Li-ION, 4-cell,2550 mah","4.5 hours");
    echo "$laptop";
}catch (\Exception $e){
    echo "invalid data";
}

