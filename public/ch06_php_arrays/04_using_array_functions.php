<?php
// # Using Array Functions
echo '<a href="index.html">Index</a><br><br>';

// # is_array
$fred = "fred";
$fred = array("one", "two", "three");
// $fred = array(array(1, 2, 3), array(4, 5, 6));

echo (is_array($fred)) ? "Is an array" : "Is not an array";
echo "<br>";

// # count
echo count($fred);
echo "<br>";
// The second parameter is optional and sets the mode to use.
// It should be either 0 to limit counting to only the top level
// or 1 to force recursive counting of all subarray elements too.
echo count($fred, 1);
echo "<br>";

// # sort
// sort($fred, SORT_NUMERIC);
// sort($fred, SORT_STRING);
// rsort($fred, SORT_NUMERIC);
// rsort($fred, SORT_STRING);

// print_r($fred);

// # shuffle
$cards = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
shuffle($cards);
print_r($cards);
echo "<br>";

// # explode
$temp = explode(' ', "This is a sentence with seven words");
print_r($temp);
echo "<br>";

// Exploding a string delimited with *** into an array
$temp = explode('***', "A***sentence***with***asterisks");
print_r($temp);
echo "<br>";

// # extract
// if the query string parameter q is sent to a PHP script along with the associated value Hi there,
// a new variable called $q will be created and assigned that value.
extract($_GET);

// avoid the possibility of variable conficts
extract($_GET, EXTR_PREFIX_ALL, 'fromget');

// # compact
$fname = "Doctor";
$sname = "Who";
$planet = "Gallifrey";
$system = "Gridlock";
$constellation = "Kasterborous";

$contact = compact('fname', 'sname', 'planet', 'system', 'constellation');

print_r($contact);
echo "<br>";

// Using compact to help with debugging
$j = 23;
$temp = "Hello";
$address = "1 Old Street";
$age = 61;

print_r(compact(explode(' ', 'j temp address age')));
echo "<br>";

// # reset
echo current($fred);
next($fred);
reset($fred); // Throw away return value
$item = reset($fred); // Keep first element of the array in $fred
echo $item;

// # end
end($fred);
echo current($fred);
reset($fred);
$item = end($fred); // Keep last element of the array in $fred
echo $item;