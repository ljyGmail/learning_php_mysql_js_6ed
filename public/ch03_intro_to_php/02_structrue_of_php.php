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

// # Operators
echo "<br>";
echo 6 + 2;

// ## Arithmetic operators

// ## Assignment operators
$count += 1;
echo "<br>";
echo $count;

// ## Comparison operators

// ## Logical operators
$hour = 13;
if ($hour > 12 && $hour < 14)
    echo '<br>Eat Lunch~';

// # Variable Assignment
$x = 1;
$y = 2;
$x += 10;
$y -= 10;

// ## Variable incrementing and decrementing
++$x;
--$y;

// ## String concatenation
echo "<br>";
$msgs = 5;
echo "You have " . $msgs . " message.";

// ## String types
$info = 'Preface variables with a $ like this: $variable';
echo "<br>";
echo $info;

echo "<br>";
echo "This week $count people have viewed your profile.";

// ## Escaping characters
$text = 'My seplling\'s still atroshus';

$text = "She wrote upon it, \"Return to sender\".";

$heading = "Date\tName\tPayment";

// # Multiline Commands
$author = "Seteve Ballmer";

echo "<br>";
echo "Developers, developers, developers, developers, developers,
developers, developers, developers, developers!

- $author.";

$author = "Bill Gates";
$text = "Measuring programming progress by lines of code is like
Measuring aircraft building progress by weight.

- $author.";

$author = "Brian W. Kernighan";

echo "<br>";
echo <<<_END
Debugging is twice as hard as writing the code in the first place.
Therefore, if you write the code as cleverly as possible, you are,
by definition, not smart enough to debug it.

- $author
_END;

$author = "Scott Adams";

$out = <<<_END
Normal people believe that if it ain't broke, don't fix it.
Engineers believe that if it ain't broke, it doesn't have enough
features yet.

- $author.
_END;

echo "<br>";
echo $out;

// # Variable Typing
$number = 12345 * 67890;
echo "<br>";
echo substr($number, 3, 1);

$pi = "3.1415927";
$radius = 5;
echo "<br>";
echo $pi * ($radius * $radius);

// # Constants
define("ROOT_LOCATION", "/usr/local/www/");

$directory = ROOT_LOCATION;

// # Predefined Constants
echo "<br>";
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";
echo __FUNCTION__;
echo "<br>";
echo __CLASS__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;

// # The Difference Between the echo and print Commands
// function longdate($timestamp)
// {
//     return date("l F jS Y", $timestamp);
// }

// echo "<br>";
// echo longdate(time());
// echo "<br>";
// echo longdate(time() - 17 * 24 * 60 * 60);

// # Variable Scope

// ## Local variables
// function longdate($timestamp)
// {
//     $temp = date("l F jS Y", $timestamp);
//     return "Ths date is $temp";
// }

// echo longdate(time());

// $temp = "The date is ";
// echo $temp . longdate(time());

// function longdate($timestamp)
// {
//     return $temp . date("l F jS Y", $timestamp); // Undefined variable $temp
// }

$temp = "The date is ";
echo longdate($temp, time());

function longdate($text, $timestamp)
{
    return $text . date("l F jS Y", $timestamp);
}

// Global variables
global $is_logged_in;

// Static variables
function test()
{
    static $count = 0;
    echo $count;
    $count++;
}

echo "<br>";
test();
echo "<br>";
test();

static $int = 0; // Allowed
static $int = 1 + 2; // Correct (as of PHP 5.6)
// static $int = sqrt(144); // Disallowed

// Superglobal variables