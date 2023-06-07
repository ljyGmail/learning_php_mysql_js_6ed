<?php
// # Basic Access
echo '<a href="index.html">Index</a><br><br>';

// # Numerically Indexed Arrays
$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);
echo "<br>";

// adding items to an array using explicit locations
$paper[0] = "Copier";
$paper[1] = "Inkjet";
$paper[2] = "Laser";
$paper[3] = "Photo";

print_r($paper);
echo "<br>";

$paper[] = "Copier";
$paper[] = "Inkjet";
$paper[] = "Laser";
$paper[] = "Photo";

for($j = 0; $j < 4; ++$j)
    echo "$j: $paper[$j]<br>";

// # Associative Arrays
$paper['copier'] = "Copier & Multipurpose";
$paper['inkjet'] = "Inkjet Printer";
$paper['laser'] = "Laser Printer";
$paper['photo'] = "Photographic Paper";

echo $paper['laser'];
echo "<br>";

// # Assignment Using the array Keyword
$p1 = array("Copier", "Inkjet", "Laser", "Photo");

echo "p1 element: " . $p1[2] . "<br>";

$p2 = array('copier' => "Copier & Multipurpose", 
            'inkjet' => "Inkjet Printer",
            'laser' => "Laser Printer",
            'photo' => "Photographic Paper");

echo "p2 element: " . $p2['inkjet'] . "<br>";

// echo p1['inkjet']; // Undefined index
// echo p2[3]; // Undefined offset