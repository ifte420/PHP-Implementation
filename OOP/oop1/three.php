<?php
class Car {
    function __construct(){
        // echo "I am construct magic method </br>";
        for($x = 1; $x <= 10; $x++){
            echo "$x </br>";
        }
    }
    function sit(){
        echo "this is car sit </br>";
    }
    function __destruct(){
        echo "I am destruct magic method";
    }
}
$hi = new Car;
$hi->sit();

?>