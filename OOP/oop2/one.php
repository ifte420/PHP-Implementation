<?php
class car {
    // Properties Start
    public $wheel_color = "Black";
    // Properties End

    // Method Start
    function wheel(){
        echo "This is car wheel and wheel color $this->wheel_color";
    }
    // Method End
}
$ifte = new car;
$ifte -> wheel();



?>