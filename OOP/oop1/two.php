<?php
    class Calculator{
        function add($num_one,$num_two){
            echo $num_one+$num_two;
        }
        function sub($num_one,$num_two){
            echo $num_one-$num_two;
        }
        function mul($num_one,$num_two){
            echo $num_one*$num_two;
        }
        function divi($num_one,$num_two){
            echo $num_one/$num_two;
        }
    }

$object_calculator = new Calculator;
$object_calculator->add(5,5);
echo "</br>";
$object_calculator->sub(5,5);
echo "</br>";
$object_calculator->mul(5,5);
echo "</br>";
$object_calculator->divi(5,5);

?>