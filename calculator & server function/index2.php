<?php
print_r($_SERVER);
echo "</br>";
echo date("Y");
echo "</br>";
echo date("F");
echo "</br>";
echo date("d");
echo "</br>";
echo date("Y-m-d");
echo "</br>";
echo date("H");
echo "</br>";
echo date("i");
echo "</br>";
echo date("s");
echo "</br>";
echo date("g:i=s A");
echo "<br>";


$dt = new DateTime('now', new DateTimezone('Asia/Dhaka'));
echo $dt->format('F j, Y, g:i a');
echo date("e");


?>