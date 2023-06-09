<?php
// # Connecting to a MySQL Database
echo '<a href="index.html">Index</a><br><br>';

require_once '02_login.php';

try
{
    $pdo = new PDO($attr, $user, $pass, $opts);
}
catch (PDOException $e)
{
    throw new PDOException($e->getMessage(), (int)$e->getCode());
}

// # Building and executing a query
$query = "SELECT * FROM classics";
$result = $pdo->query($query);
print_r($result);
echo "<br><br>";

// # Fetching a result
/*
while ($row = $result->fetch()) {
    echo 'Author:   ' . htmlspecialchars($row['author']) . "<br>";
    echo 'Title:    ' . htmlspecialchars($row['title']) . "<br>";
    echo 'Category: ' . htmlspecialchars($row['category']) . "<br>";
    echo 'Year:     ' . htmlspecialchars($row['year']) . "<br>";
    echo 'ISBN:     ' . htmlspecialchars($row['isbn']) . "<br><br>";
}
*/

// # Fetching a row while specifying the style
while ($row = $result->fetch(PDO::FETCH_BOTH)) // Style of fetch
{
    echo 'Author:   ' . htmlspecialchars($row['author']) . "<br>";
    echo 'Title:   ' . htmlspecialchars($row['title']) . "<br>";
    echo 'Category:   ' . htmlspecialchars($row['category']) . "<br>";
    echo 'Year:   ' . htmlspecialchars($row['year']) . "<br>";
    echo 'ISBN:   ' . htmlspecialchars($row['isbn']) . "<br><br>";
}

// # Closing a connection
$pdo = null;
?>