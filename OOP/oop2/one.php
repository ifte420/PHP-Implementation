<?php
class car {
    // Properties Start
    public $wheel_color = "";
    public $wheel_shape = "";
    // Properties End

    // Method Start
    function __construct($color="Black" , $shape="round"){
        // echo "HI $val";
        $this->wheel_color = $color;
        $this->wheel_shape = $shape;
    }
    function wheel(){
        echo "This is car wheel, and wheel color $this->wheel_color, and wheel shape is $this->wheel_shape";
    }
    // Method End
}
$ifte = new car("White", "triangle");
$ifte -> wheel();
echo "</br>";
$reaid = new car("Red");
$reaid -> wheel();



?>