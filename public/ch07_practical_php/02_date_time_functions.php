<?php
// # Date and Time Functions
echo '<a href="index.html">Index</a><br><br>';

// current timestamp: number of seconds since the start of January 1, 1970
echo time();
echo "<br>";

// obtain the timestamp for this time next week
echo time() + 7 * 24 * 60 * 60;
echo "<br>";

// The parameter to pass are:
// The number of the hour (0-23)
// The number of the minute (0-59)
// The number of seconds (0-59)
// The number of the month (0-12)
// The number of the day (1-31)
// The year
echo mktime(0, 0, 0, 12, 1, 2022);
echo "<br>";

// date function: date($format, $timestamp)
echo date("l F jS, Y - g:ia", time());
echo "<br>";

// # Date Constants
echo date(DATE_ATOM, time());
echo "<br>";

echo date(DATE_COOKIE, time());
echo "<br>";

echo date(DATE_RSS, time());
echo "<br>";

echo date(DATE_W3C, time());
echo "<br>";

// # Using checkdate
$month = 9; // September (only has 30 days)
$day = 31; // 31st
$year = 2025; // 2025

if (checkdate($month, $day, $year))
    echo "Date is valid";
else
    echo "Date is invalid";