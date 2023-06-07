<?php
// # The foreach...as Loop
echo '<a href="index.html">Index</a><br><br>';

$paper = array("Copier", "Inkjet", "Laser", "Photo");
$j = 0;

foreach($paper as $item)
{
    echo "$j: $item<br>";
    ++$j;
}

// Walking through an associative array using foreach...as
$paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

foreach($paper as $item => $description)
{
    echo "$item: $description<br>";
}

// Walking through an associative array using myEach and list
$paper = array('copier' => "Copier & Multipurpose",
                'inkjet' => "Inkjet Printer",
                'laser' => "Laser Printer",
                'photo' => "Photographic Paper");

while (list($item, $description) = myEach($paper))
    echo "$item: $description<br>";

function myEach(&$array) // Replacement for the deprecated each function
{
    $key = key($array);
    $result = ($key === null) ? false : [$key, current($array), 'key', 'value' => current($array)];
    next($array);
    return $result;
}

list($a, $b) = array('Alice', 'Bob');
echo "a=$a b=$b";