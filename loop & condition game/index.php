<?php
$gender = "Male";
$age = 18;
$location = "Dhaka";
if($gender == "Male"){
//2nd if start
if($age >= 10){
    //3rd if start
    if($location == "Dhaka"){
        echo "Welcome to our game";
    }
    else{
        echo "You are not play, beacuse you are not from dhaka city";
    }
    //3rd if End
}
else{
    echo "Because you age is less then 10";
}
//2nd if end
}
else{
    echo "You can not play, bcz you are not male";
}
echo "<br><br>";
// Game and 

$Age = 18;
if ($Age <= 0){
    echo "Don't fun for me (¬_¬ )";
}
else if($Age >= 1 && $Age <= 10){
    echo "<h4>Yeah! You are Child:)</h4>";
}
else if($Age > 10 && $Age <= 30){
    echo "<h4>You are Young</h4>";
}
else if($Age > 30 && $Age <= 50){
    echo "<h4>You are Mature</h4>";
}
else {
    echo "<h4>You are old!</h4>";
}
// Range and

$number = 10;
// $number++;
$number++;
    // echo $number++; //Post increment
    // echo ++$number; //pre increment
    echo $number . "<br> <br>";

// Loop
//for(start; end; increment by koto)
// $Number = 1; //Start

for($Number = 1; $Number <= 100; $Number++){
    if($Number%2 == 0){
        echo $Number . ", ";
    }
}
// echo 12%2;
// echo 13%2;
?>
