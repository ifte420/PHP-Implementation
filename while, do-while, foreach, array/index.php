<?php
// Array
$ifte = [12, 35, 50, 11, 3, 10, 20, 100, 550, 13, 17, "Hello"];
$end_point = count($ifte) - 1;

for($number = 0; $number <= $end_point; $number++){
    echo $ifte[$number]. ", ";
}
echo "<br>";
// Using for loop
$asad = 1;
// for($asad; $asad<=10; $asad++){
//         echo $asad. ", ";
// }

// Using while loop
while($asad<=10){
    echo $asad."<br>";
    $asad++;
}
// Using do while loop
do{
    echo "ifte<br>";
    $asad++;
}while($asad<=3);

// Using forech
$serial_no = 1;
$color = ["red", "green", "yellow", 12, 15, 22, 30, 560,];
foreach($color as $index => $value){
    // echo $serial_no . ". ";
    // echo $value . "<br>";
    // $serial_no++;
    // echo $index . "- " . $value . "<br>";


// jodi ami 3-5 ta value and index dekhate chai tahole... 
    if($serial_no <= 3){
        echo $index . "- " . $value . "<br>";
    }$serial_no++;
// dekhano sesh
}
?> 