<?php
echo '<a href="index.html">Index</a><br><br>';

// # PHP Functions
echo date("l"); // Displays the day of the week
echo "<br>";

// phpinfo();

echo strrev(" .dlrow olleH");
echo "<br>";
echo str_repeat("Hip ", 2);
echo "<br>";
echo strtoupper("hooray");
echo "<br>";

// ## Defining a Function

/*
The general syntax for a function is as follows:
function function_name([parameter[, ...]])
{
    // Statements
}
*/

// Returning a Value
$lowered = strtolower("aNY # of Letters and Punctuation you WANT");
echo $lowered;
echo "<br>";

$ucfixed = ucfirst("any # of letters and punctuation you want");
echo $ucfixed;
echo "<br>";

print(5-8);
echo "<br>";
print(abs(5-8));
echo "<br>";

echo ucfirst(strtolower("aNY # of Letters and Punctuation you WANT"));
echo "<br>";

echo fix_names("WILLIAM", "henry", "gatES");
echo "<br>";

function fix_names($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return $n1 . " " . $n2 . " " . $n3;
}

// ## Returning an Array
fix_names_array("WILLIAM", "henry", "gatES");

function fix_names_array($n1, $n2, $n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));

    return array($n1, $n2, $n3);
}

// Passing Arguments by Reference
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names_by_ref($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_names_by_ref(&$n1, &$n2, &$n3)
{
    $n1 = ucfirst(strtolower($n1));
    $n2 = ucfirst(strtolower($n2));
    $n3 = ucfirst(strtolower($n3));
}

// Returning Global Variables
$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";
fix_names_global($a1, $a2, $a3);
echo $a1 . " " . $a2 . " " . $a3 . "<br>";

function fix_names_global()
{
    global $a1; $a1 = ucfirst(strtolower($a1));
    global $a2; $a2 = ucfirst(strtolower($a2));
    global $a3; $a3 = ucfirst(strtolower($a3));
}

// Recap of Variable Scope
/*
- Local variables are accessible just from the part of your code where you define
    them. If they're outside of a function, they can be accessed by all code outside of
    functions, classes, and so on. If a variable is inside a function, only that function
    can access the variable, and its value is lost when the function returns.
- Global variables are accessible from all parts of your code, whether within or outside functions.
- Static variable are accessible only within the function that declared them but
    retain their value over multiple calls.
*/