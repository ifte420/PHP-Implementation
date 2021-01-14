<?php
class car {
    // Properties Start
    public $wheel_color = "Black";
    // Properties End

    // Method Start
    function __construct($val="Red"){
        // echo "HI $val";
        $this->wheel_color = $val;
    }
    function wheel(){
        echo "This is car wheel and wheel color $this->wheel_color";
    }
    // Method End
}
$ifte = new car("White");
$ifte -> wheel();
echo "</br>";
$reaid = new car("Red");
$reaid -> wheel();



?>