<?php
// # HTTP Authentication

// PHP authentication
/*
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    echo "Welcome User: " . htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
        " Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
}
else
{
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.1 401 Unauthorized');
    die("Please enter your username and password");
}
echo "<br>";
*/

// PHP authentication with input checking
/*
$username = 'admin';
$password = 'letmein';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    if ($_SERVER['PHP_AUTH_USER'] === $username && $_SERVER['PHP_AUTH_PW'] === $password)
    {
        echo "You are now logged in";
    }
    else
    {
        die("Invalid username/password combination");
    }
}
else
{
    header('WWW-Authenticate: Basic ream="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}
echo "<br>";
*/

echo '<a href="index.html">Index</a><br><br>';

// Test whether two strings match exactly 
$str123 = "0e123";
$str456 = "0e456";

if ($str123 == $str456)
{
    echo "$str123 == $str456 is true<br>";
}
else
{
    echo "$str123 == $str456 is false<br>";
}

if ($str123 === $str456)
{
    echo "$str123 === $str456 is true<br>";
}
else
{
    echo "$str123 === $str456 is false<br>";
}

// # Storing Usernames and Passwords
echo hash('ripemd128', 'saltstringmypassword'); // insecure, not recommended
echo "<br>";

// ## Using password_hash
$hash = password_hash("mypassword", PASSWORD_DEFAULT);
echo $hash;
echo "<br>";

// ## Using password_verify
if (password_verify("mypassword", $hash))
    echo "Valid";