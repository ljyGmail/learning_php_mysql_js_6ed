<?php
// # Using printf
echo '<a href="index.html">Index</a><br><br>';

printf("There are %d items in your basket<br>", 3);
printf("There are %b items in your basket<br>", 3);

printf("My name is %s. I'm %d years old, which is %X in hexadecimal<br>", 'Simon', 33, 33);

printf("<span style='color:#%X%X%X'>Hello</span><br>", 65, 127, 245);

// create a darker color with this:
$r = 65;
$g = 127;
$b = 245;
printf("<span style='color:#%X%X%X'>Hello</span><br>", $r - 30, $g - 30, $b - 30);

// # Precision Setting
printf("The result is: $%.2f<br>", 123.42 / 12);

echo "<pre>"; // Enables viewing of the spaces
// Pad to 15 spaces
printf("The result is $%15f\n", 123.42 / 12);

// Pad to 15 spaces, fill with zeros
printf("The result is $%015f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision
printf("The result is $%15.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with zeros
printf("The result is $%015.2f\n", 123.42 / 12);

// Pad to 15 spaces, 2 decimal places precision, fill with # symbol
printf("The result is $%'#15.2f\n", 123.42 / 12);

// # String Padding
echo "<pre>";

$h = 'Rasmus';

printf("[%s]\n", $h); // Standard string output
printf("[%12s]\n", $h); // Right justify with spaces to width 12
printf("[%-12s]\n", $h); // Left justify with spaces
printf("[%012s]\n", $h); // Pad with zeros
printf("[%'#12s]\n", $h); // Use the custom padding character '#'

$d = 'Rasmus Lerdorf'; // The original creator of PHP

printf("[%12.8s]\n", $d); // Right justify, cutoff of 8 characters
printf("[%-12.12s]\n", $d); // Left justify, cutoff of 12 characters
printf("[%-'@12.10s]\n", $d); // Left justify, pad with '@', cutoff 10 chars

echo "</pre>";

// # Using sprintf
$hexstring = sprintf("%X%X%X", 65, 127, 245);
echo $hexstring . '<br>';

$out = sprintf("The result is: $%.2f", 123.42 / 12);
echo $out;