<?php
echo '<a href="index.html">Index</a><br><br>';

// TRUE or FALSE?
echo "a: [" . TRUE . "]<br>";
echo "b: [" . FALSE . "]<br>";
echo '<br>';

echo "a: [" . (20 > 9) . "]<br>";
echo "b: [" . (5 == 6) . "]<br>";
echo "c: [" . (1 == 0) . "]<br>";
echo "d: [" . (1 == 1) . "]<br>";
echo '<br>';

// Literals and Variables
$myname = "Brian";
$myage = 37;

echo "a: " . 73 . "<br>"; // Numeric literal
echo "b: " . "Hello" . "<br>"; // String literal
echo "c: " . FALSE . "<br>"; // Constant literal
echo "d: " . $myname . "<br>"; // String variable
echo "e: " . $myage . "<br>"; // Numeric variable

/*
$days_to_new_year = 366 - $day_number; // Expression

if ($days_to_new_year < 30) {
    echo "Not long now till new year"; // Statement
}
*/