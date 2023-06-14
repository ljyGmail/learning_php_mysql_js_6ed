<?php
/*
// Post
if (isset($_POST['url']))
{
    echo file_get_contents('http://' . sanitizeString($_POST['url']));
}
*/

// Get
if (isset($_GET['url']))
{
    echo file_get_contents("http://" . sanitizeString($_GET['url']));
}

function SanitizeString($var)
{
    $var = strip_tags($var);
    $var = htmlentities($var);
    return stripslashes($var);
}