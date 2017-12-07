<?php
namespace animals;
include "Animal.php";
class Cat extends Animal
{
    public function sayMeow(){
        echo "meow";
    }
}