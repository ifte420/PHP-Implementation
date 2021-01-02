<?php
    $hello = 56;
    echo "Your Value is" .$hello ;

    echo ("<br>");

    $world = "Bangladesh!";
    echo strrev($world);

    echo ("<br>");

    $bd = "Hello Bangladesh!";
    echo str_replace("Bangladesh", "cit", $bd);
    
    echo ("<br>");

    define("PI", 3.1416);
    echo "Constant Value of PI is " . PI;
    
    echo ("<br>");
    
    $number_one = 54;
    $number_two = 38;
    echo "Addition of two values: " . "(" . ($number_one + $number_two). ")"; 
    echo "<br>Multilication of two values: " . "#" . ($number_one * $number_two). "#";
    echo "<br>Divison of two values: " .  ($number_one / $number_two);
    echo "<br>Subtraction of two values: " . "$" . ($number_one - $number_two);

    // Slove 6
    echo "<br>";
    $a = 43;
    $b = 5;
    echo "Remainder is " . $a % $b;
    echo "<br>";
    // Slove 7

    $gender = "male";

    if($gender == "male"){
        echo "You are a Male";
    }
    else if($gender == "female"){
        echo "You are a Female";
    }
    else {
        echo "Tumar Gender nai Mia";
    }
    echo "<br>";

    // slove 8
    $int = 40;
    if($int % 2 == 0){
        echo $int . " is even";
    }
    else{
        echo $int . " is not even";
    }

    // Slove 9
    echo "<br>";
    $num = 1;
    while($num <=10){
        echo $num . "#";
        $num++;
    }
    echo "<br>";
    // Slove 11
    for($i=2; $i<=10; $i++){
        if($i % 2 == 0){
            echo $i. '@';
        }
    }
    echo "<br>";
    // Slv 12
    for($h=1; $h<=10; $h++){
        if($h % 2 != 0){
            echo $h . "<br>";
        }
    }

    // slove 10
    $char = "s";
$cool = strtolower($char);

switch($cool){
    case "a":
        echo "Vowel";
    break;

    case "e":
        echo "Vowel";
    break;

    case "i":
        echo "Vowel";
    break;

    case "o":
        echo "Vowel";
    break;

    case "u":
        echo "Vowel";
    break;

    default:
    echo "Consonant";
}

// Another Way
// if($cool == "a" || $cool == "e" || $cool == "i"|| $cool == "o"|| $cool == "u"){
//     echo "Vowel";
// }
// else{
//     echo "Consonant";
// }
?>