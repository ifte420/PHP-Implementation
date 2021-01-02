<?php
$ifte = array(
    "one" => array(12, 35, 21),
    "two" => array(52, 33, 63),
    "three" => array(50, 41, 80),
);
print_r($ifte['two']);

foreach($ifte as $first_loop_index => $first_loop_value){
    print_r($first_loop_index);
    foreach($first_loop_value as $second_loop_value){
        print_r($second_loop_value);
        echo ", ";
    }
    echo "<br>";
    }
// Nested array end

$shihab = array (10, "v", "b", "x",1, 2, 3, "a", "z");
rsort($shihab);
print_r ($shihab);

echo "<br><br>";

$asad = array (
    "c" => 50,
    "b" => 3,
    "t" => 28
);
krsort($asad);
print_r($asad);
echo "<br>";
// Array subject sesh

$name = "madam";
// echo strlen($name);
// echo str_word_count($name);
echo "<br>";
if($name == strrev($name)){
    echo "This is palindrome Word";
}
else {
    echo "This is not palindrome Word";
}
echo "<br>";
$req = "Hi world";
echo str_replace("world", "Bangladesh, ", $req);
echo str_replace("world", "shohan, ", $req);
echo str_replace("world", "cit, ", $req);
echo str_replace("world", "Ifte", $req);
echo "<br><br>";
$shohan = "bAngla, english, hindi, china";
print_r(explode(", ", $shohan));
echo "<br>" . ucwords(strtolower($shohan));
echo "<br>" .lcfirst($shohan);
?>