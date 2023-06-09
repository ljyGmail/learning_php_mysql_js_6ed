<?php
// # Sanitizing Input
echo '<a href="index.html">Index</a><br><br>';

function sanitizeString($var)
{
    if (get_magic_quotes_gpc())
        $var = stripslashes($var);
    $var = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}

function sanitizeMySQL($pdo, $var)
{
    $var = $pdo->quote($var);
    $var = sanitizeString($var);
    return $var;
}

/*
$var = sanitizeString($_POST['user_input']);

$var = sanitizeMySQL($pdo, $_POST['user_input']);
*/