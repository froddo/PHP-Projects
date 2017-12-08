<?php
function __autoload($className) {
    require_once ("./" . $className . ".php");
}

try{
    $person= new Person("Ivan",25,"ivan@gmail.com");
   echo "$person";
}catch (Exception $e){
    echo "some error";
}
echo "<br>";
try{
    $child=new Child("Plamen",30);
    echo "$child";
}catch (Exception $e){
    echo "some error";
}