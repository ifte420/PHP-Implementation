<?php
class Car {
    //Properties
    protected $color = "White";
    //Properties
    function wheel(){
        echo "This is Wheel $this->color </br>";
    }
    function engine(){
        echo "This is Engine";
    }
}

class Bmw extends Car{
    function door(){
        echo "This is Door $this->color";
    }
}


$object = new Bmw;
$object->wheel();
$object->door();
?>