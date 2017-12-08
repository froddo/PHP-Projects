<?php
namespace gsmOwner;
include "GSM.php";

$gsm=new GSM();
$gsm->setGsm("Iphone X","Ivan","2000","Apple");
echo $gsm->getGsm();
echo "<br>";
$gsm->setDisplay("5.5inches","401ppi","1080p");
echo $gsm->getDisplay();
echo "<br>";
$gsm->setBattery("Ifixit","24 hours","8 hours");
echo $gsm->getBattery();