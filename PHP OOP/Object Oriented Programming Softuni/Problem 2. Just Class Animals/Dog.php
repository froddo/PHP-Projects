<?php
namespace animals;
include "Animal.php";
class Dog extends Animal
{
    public function bark(){
        echo "woof woof";
    }
}