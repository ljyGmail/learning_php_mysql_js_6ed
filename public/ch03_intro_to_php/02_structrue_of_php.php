<?php
// # Using Comments

// This is a comment

// echo "X equals $x";

$x = 2;
$x += 10; // Increment $x by 10

/* This is a section 
of multiline comments
which willl not be
interpreted */

// # Basic Syntax
// ## Semicolons
$x += 10;

// ## The $ symbol
$mycounter = 1;
$mystring = "Hello";
$myarray = array("One", "Two", "Three");

// # Variables

// ## String variables
$username = "Fred Smith";
echo $username;
echo "<br>";
$current_user = $username;
echo $current_user;

// ## Numeric variables
$count = 17;

$count = 17.5;

// ## Arrays
$team = array('Bill', 'Mary', 'Mike', 'Chris', 'Anne');
array();
echo "<br>";
echo $team[3];

// ## Two-dimensional arrays
$xox = array(
    array('x', ' ', 'o'),
    array('o', 'o', 'x'),
    array('x', 'o', ' ')
);

echo "<br>";
echo $xox[1][2];

// ## Variable-naming rules
