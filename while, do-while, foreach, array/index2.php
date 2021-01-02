<?php
    // $ifte = [50, 51, 20, 21, 13];
// Another way for array
$ifte = array(100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 2000, 3000, "Hello");
$end_point = count($ifte)-1;

    echo "<h3>Array print with for loop</h3>";
for($number = 0; $number <= $end_point; $number++){
    echo $ifte[$number]. ", ";
}
echo "<br>";

// foreach loop
    echo "<h3>Array print with foreach loop</h3>";

$shihab = [10 => 50, 51, 52, 53, 54, 56, 57, 58, 59, 60, "Hello", "World"];
foreach($shihab as $idx_no => $rakib){
    echo $idx_no . ". " . $rakib . "<br>";
}
?>