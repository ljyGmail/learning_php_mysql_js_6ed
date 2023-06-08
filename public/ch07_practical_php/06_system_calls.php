<?php
// # System Calls
echo '<a href="index.html">Index</a><br><br>';

// $cmd = "dir"; // Windows, Mac, Linux
$cmd = "ls"; // Linux, Unix & Mac

exec(escapeshellcmd($cmd), $output, $status);

if ($status)
    echo "Exec command failed";
else
{
    echo "<pre>";
    foreach ($output as $line)
        echo htmlspecialchars("$line\n");
    echo "</pre>";
}

// XHTML or HTML5?