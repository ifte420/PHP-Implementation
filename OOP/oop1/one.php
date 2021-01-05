<?php
class Human {
    function talking($power = "Properly"){
        echo "I can talk $power!";
    }
    function walking(){
        echo "I can Walking!";
    }
}

$ifte = new Human;// Object creation
$ifte -> talking("Slowly");
echo "</br>";
$ifte -> walking();
echo "</br>";

?>