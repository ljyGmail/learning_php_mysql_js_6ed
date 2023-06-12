<?php
session_start();

if (isset($_SESSION['forename']))
{
    $forename = htmlspecialchars($_SESSION['forename']);
    $surname = htmlspecialchars($_SESSION['surname']);

    // # Ending a Session
    destroy_session_and_data();

    echo "Welcome back $forename.<br>
        Your full name is $forename $surname.<br>";
}
else
    echo "Please <a href='05_using_sessions.php'>Click here</a> to log in.";

function destroy_session_and_data()
{
    $_SESSION = array();
    setcookie(session_name(), '', time() - 2592000, '/');
    // echo session_name() . "<br>"; => PHPSESSID
    session_destroy();
}

// # Session Security
/*
## Preventing session hijacking
## Preventing session fixation
## Forcing cookie-only sessions
## Using a shared server
*/