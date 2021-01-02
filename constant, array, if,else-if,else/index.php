<?php
//Variable
$hi = "life so broing";
    echo $hi . "</br>";
//Variable Data chg
$hi = 520;
    echo $hi . "</br></br>";

// Constant
define ("IFTE", 420);
    echo IFTE . "<br></br>";

// Array :)
$ifte_arr = [45 , 5.50 , "Ifte" ,"Hello" , 35.5];
    print_r($ifte_arr);
    // echo $ifte_arr[2], $ifte_arr[4];

    echo "</br></br>";
    var_dump($ifte_arr);
    echo "</br></br>";
    print_r("</br>" . $ifte_arr[2] . "</br>");
    // echo $ifte_arr[2], $ifte_arr[4];
    var_dump($ifte_arr[1]);

// Condition
$if_var = 50;
if($if_var == 20){
    echo "</br></br>This is True number Twenty";
}
else if ($if_var == 40){
    echo "</br></br>This is Else If number Forty";
}
else if ($if_var == 50){
    echo "</br></br>This is Else If number Fifty";
}
else{
    echo "</br></br>This is Worng & False Number";
}
// Another Condition
$num_var = 102;
if($num_var > 100){
    echo "</br></br>This Number is greater than 100";
} 
else if($num_var == 100){
    echo "</br></br>This Number is 100";
}
else{
    echo "</br></br> This Number is less than 100";
}

?>