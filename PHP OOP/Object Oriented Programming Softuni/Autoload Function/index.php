<?php
function __autoload($className) {
    require_once ("./" . $className . ".php");
}

$human=new Human();
$human->goToEat();
echo '<br>';
$dog=new Dog();
$dog->bark();
echo '<br>';
$cat=new Cat();
$cat->sayMeow();

