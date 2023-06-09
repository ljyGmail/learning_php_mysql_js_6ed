<?php
// # Preventing Hacking Attempts
echo '<a href="index.html">Index</a><br><br>';

// # Steps You Can Take
require_once '02_login.php';

try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

/*
$user = mysql_fix_string($pdo, $_POST['user']);
$pass = mysql_fix_string($pdo, $_POST['pass']);
$query = "SELECT * FROM users WHERE user=$user AND pass=$pass";

*/

function mysql_entities_fix_string($pdo, $string)
{
    return htmlentities(mysql_fix_string($pdo, $string));
}

function mysql_fix_string($pdo, $string)
{
    if (get_magic_quotes_gpc())
        $string = stripslashes($string);
    return $pdo->quote($string);
}

// # Using Placeholders
$stmt = $pdo->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
$stmt->bindParam(1, $author, PDO::PARAM_STR, 128);
$stmt->bindParam(2, $title, PDO::PARAM_STR, 128);
$stmt->bindParam(3, $category, PDO::PARAM_STR, 16);
$stmt->bindParam(4, $year, PDO::PARAM_INT);
$stmt->bindParam(5, $isbn, PDO::PARAM_STR, 13);

$author = 'Emily Brontë';
$title = 'Wuthering Heights';
$category = 'Classic Fiction';
$year = '1847';
$isbn = '9780553212587';

$stmt->execute([$author, $title, $category, $year, $isbn]);

printf("%d Row inserted.\n", $stmt->rowCount());

// # Preventing JavaScript Injection into HTML