<?php
abstract class Car {
    abstract function wheel();
    abstract function engine();
}
class Bmw extends Car{
    function wheel(){
        echo "This is car wheel";
    }
    function engine(){
        echo "This is Car engine";
    }
    function door(){
        echo "This is car door";
    }
}

$obj = new Bmw;
$obj -> door();
$obj -> wheel();


?>