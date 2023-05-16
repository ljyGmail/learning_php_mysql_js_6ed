<?php
echo '<a href="index.html">Index</a><br><br>';

// while Loops
/*
$fuel = 10;

while ($fuel > 1) {
    // Keep driving...
    echo "There's enough fuel";
}
*/

$count = 1;

while ($count <= 12) {
    echo "$count times 12 is " . $count * 12 . "<br>";
    ++$count;
}
echo "<br>";

// a shortened version
$count = 0;
while (++$count <= 12) {
    echo "$count times 12 is " . $count * 12 . "<br>";
}
echo "<br>";

// do...while Loops
$count = 1;
do {
    echo "$count times 12 is " . $count * 12 . "<br>";
} while (++$count <= 12);
echo "<br>";

// for Loops
for ($count = 1; $count <= 12; ++$count) {
    echo "$count times 12 is " . $count * 12 . "<br>";
}
echo "<br>";

// Breaking Out of a Loop
/*
$fp = fopen("text.txt", "wb");

for ($j = 0; $j < 100; ++$j) {
    $written = fwrite($fp, "data");

    if ($written == FALSE)
        break;
}

fclose($fp);
*/

// The continue Statement
$j = 11;
while ($j > -10) {
    $j--;
    if ($j == 0)
        continue;
    echo "10 / " . $j . " = " . (10 / $j) . "<br>";
}