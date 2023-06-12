<?php
// # Using Sessions

// # Starting a Session
require_once '../ch11_accessing_mysql_using_php/02_login.php';

// # Setting a Timeout
ini_set('session.gc_maxlifetime', 60 * 60 * 24);

try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (\PDOException $e)
{
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW']))
{
    $un_temp = sanitize($pdo, $_SERVER['PHP_AUTH_USER']);
    $pw_temp = sanitize($pdo, $_SERVER['PHP_AUTH_PW']);
    $query = "SELECT * FROM users WHERE username=$un_temp";
    $result = $pdo->query($query);

    if (!$result->rowCount())
        die("User not found");

    $row = $result->fetch();
    $fn = $row['forename'];
    $sn = $row['surname'];
    $un = $row['username'];
    $pw = $row['password'];

    if (password_verify(str_replace("'", "", $pw_temp), $pw))
    {
        session_start();

        echo '<a href="index.html">Index</a><br><br>';
        $_SESSION['forename'] = $fn;
        $_SESSION['surname'] = $sn;

        echo htmlspecialchars("$fn $sn : Hi $fn, you are now logged in as '$fn'");
        echo "<br>";
        echo ini_get('session.gc_maxlifetime');
        die("<p><a href='06_continue.php'>Click here to continue</a></p>");
    }
    else
    {
        echo '<a href="index.html">Index</a><br><br>';
        die("Invalid username/password combination");
    }
}
else
{
    header('WWW-Authenticate: Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');

    echo '<a href="index.html">Index</a><br><br>';
    die("Please enter your username and password");
}

function sanitize($pdo, $str)
{
    $str = htmlentities($str);
    return $pdo->quote($str);
}