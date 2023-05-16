<?php
echo '<a href="index.html">Index</a><br><br>';

// THe if Statement
/*
$bank_balance = 50;
if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
}
*/

// The else Statement
/*
if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} else {
    $saving += 50;
    $bank_balance -= 50;
}
*/

// The elseif Statement
/*
if ($bank_balance < 100) {
    $money = 1000;
    $bank_balance += $money;
} elseif ($bank_balance > 200) {
    $savings += 100;
    $bank_balance -= 100;
} else {
    $savings += 50;
    $bank_balance -= 50;
}
*/

// The switch Statement
$page = "Login";
if ($page == "Home")
    echo "You selected Home";
elseif ($page == "About")
    echo "You selected About";
elseif ($page == "News")
    echo "You selected News";
elseif ($page == "Login")
    echo "You selected Login";
else
    echo "Unrecognized selection";

switch ($page) {
    case "Home":
        echo "You selected Home";
        break;
    case "About":
        echo "You selected About";
        break;
    case "News":
        echo "You selected News";
        break;
    case "Login":
        echo "You selected Login";
        break;
    case "Links":
        echo "You selected Links";
        break;
    default:
        echo "Unrecognized selection";
        break;

}

// Alternative syntax
switch ($page):
    case "Home":
        echo "You selected Home";
        break;
    // etc
    case "Link":
        echo "You selected Links";
        break;
endswitch;

echo "<br>";
// The ?(or ternary) Operator
$fuel = 1;
echo $fuel <= 1 ? "Fill tank now" : "There's enough fuel";

$enough = $fuel <= 1 ? FALSE : TRUE;