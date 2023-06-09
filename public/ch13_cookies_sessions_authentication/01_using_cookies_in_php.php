<?php
// # Using Cookies in PHP

// # Setting a Cookie
// setcookie(name, value, expire, path, domain, secure, httponly);

// Create a cookie with the name location and the value USA that is
// accessible across the entire web server on the current domain,
// and will be removed from the browser's cache in seven days:
setcookie('location', 'USA', time() + 60 * 60 * 24 * 7, '/');

echo '<a href="index.html">Index</a><br><br>';

// # Accessing a Cookie
if (isset($_COOKIE['location']))
    echo $_COOKIE['location'];
else
    echo "No cookie named 'location'.";