<?php
class Car {
    //Properties
    protected $color = "White";
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
class Bmw_bd extends Bmw{
    function glass(){
        echo "This is Glass $this->color";
    }
}

$object = new Bmw_bd;
$object->wheel();
$object->door();
$object->glass();

?>