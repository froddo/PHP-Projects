<?php
namespace PcCatalog;
include "Computer.php";
try{
    $computer=new Computer("Dell","Intel core i7 Skylake","Nvidia Geforce GTX 1060","Asus","16gb","Samsung 250gb ssd");
    $computer->setComponentsPrice(650.50,560.80,340.90,280.30,190.00);
    $computer->validate();
    setlocale(LC_ALL,'BGN');
    $currency=setlocale(LC_ALL,0);
    $computer->setCurrency($currency);
    echo "$computer";

    echo "<br>";
    echo "<br>";
    $computer2=new Computer("Lenovo", "Amd Athlon X4 880K","Ati Radeon X1200","Gigabyte","8 gb","Samusung Pro 250 GB");
    $computer2->setComponentsPrice(550.00,340.60,220.10,160.80,300.50);
    $computer2->validate();
    setlocale(LC_ALL,'BGN');
    $currency=setlocale(LC_ALL,0);
    $computer2->setCurrency($currency);
    echo "$computer2";


}catch (\Exception $e){
    echo "invalid data";
}