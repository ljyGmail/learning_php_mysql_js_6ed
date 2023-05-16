<?php
echo '<a href="index.html">Index</a><br><br>';

// Operator Precedence
echo 1 + 2 + 3 - 4 + 5 . "<br>";
echo 2 - 4 + 5 + 3 + 1 . "<br>";
echo 5 + 2 - 4 + 1 + 3 . "<br>";
echo "<br>";

echo 1 * 2 * 3 / 4 * 5 . "<br>";
echo 2 / 4 * 5 * 3 * 1 . "<br>";
echo 5 * 2 / 4 * 1 * 3 . "<br>";
echo "<br>";

echo 1 + 2 * 3 - 4 * 5 . "<br>";
echo 2 - 4 * 5 * 3 + 1 . "<br>";
echo 5 + 2 - 4 + 1 * 3 . "<br>";
echo "<br>";

// Associativity
$level = $score = $time = 0;

// Ralational Operators

// Equality
$month = "March";

if ($month == "March")
    echo "It's springtime";
echo "<br>";

$a = "1000";
$b = "+1000";

if ($a == $b)
    echo "1";
if ($a === $b)
    echo "2";

echo "<br>";

$a = "1000";
$b = "+1000";

if ($a != $b)
    echo "1";
if ($a !== $b)
    echo "2";

echo "<br>";

// Comparison operators
$a = 2;
$b = 3;

if ($a > $b)
    echo "$a is greater than $b<br>";
if ($a < $b)
    echo "$a is less than $b<br>";
if ($a >= $b)
    echo "$a is greater than or equal to  $b<br>";
if ($a <= $b)
    echo "$a is less than or equal to  $b<br>";

echo "<br>";

// Logical operators
$a = 1;
$b = 0;

echo ($a and $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a XOR $b) . "<br>";
echo !$a . "<br>";