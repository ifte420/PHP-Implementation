<?php
//function create
function shohan($daynamic_name = "World", $daynamic_age = 1){
    echo "Hello " . $daynamic_name . "<br>";
    echo "Your age is " . $daynamic_age . "<br>";
}
shohan("Ifte" , 18);
shohan("Ean");
shohan();

// count function create
    $cit = [4,3,2,1,5,10,12,34,34,5324,43,34,434];
    // echo count($cit);
    function shohan_count($input_arr){
        $counter = 0;
        foreach($input_arr as $arr){
            $counter++;
        }
        echo "This is has total " . $counter;
    }
    shohan_count($cit);
echo "<br> <br>";
// ADD function create
$num = "5, 5";

function ifte($shihab){
    $h = 0;
    $shihab = explode(", ", $shihab);
    foreach($shihab as $value){
        $h = $h + $value;
    }
    echo $h;
}
ifte($num);

// another way
// $number = "5, 5";
// $after_explode = explode(", ", $number);

// $result = 0;
// foreach($after_explode as $key=>$value){
//     $result = $result + $value;
// }
//     echo $result;
?>