<?php
// # Practical MySQL
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

// # Creating a Table
/*
$query = "CREATE TABLE cats (
    id SMALLINT NOT NULL AUTO_INCREMENT,
    family VARCHAR(32) NOT NULL,
    name VARCHAR(32) NOT NULL,
    age TINYINT NOT NULL,
    PRIMARY KEY (id)
)";

$result = $pdo->query($query);
*/

// # Describing a Table
$query = "DESCRIBE cats";
$result = $pdo->query($query);

echo "<table><tr><td>Column</td><td>Type</td><td>Null</td><td>Key</td></tr>";

while ($row = $result->fetch(PDO::FETCH_NUM))
{
    echo "<tr>";
    for ($k = 0; $k < 4; ++$k)
        echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
    echo "</tr>";
}

echo "</table>";

// # Dropping a Table
/*
$query = "DROP TABLE cats";
$result = $pdo->query($query);
*/

// # Adding Data
/*
$query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Leo', 4)";
// $query = "INSERT INTO cats VALUES(NULL, 'Cougar', 'Growler', 2), (NULL, 'Cheetah', 'Charly', 3)";
$result = $pdo->query($query);
*/

// # Retrieving Data
$query = "SELECT * FROM cats";
$result = $pdo->query($query);

echo "<table><tr><th>ID</th><th>Family</th><th>Name</th><th>Age</th></tr>";

while ($row = $result->fetch(PDO::FETCH_NUM))
{
    echo "<tr>";
    for ($k = 0; $k < 4; ++$k)
        echo "<td>" . htmlspecialchars($row[$k]) . "</td>";
    echo "</tr>";
}

echo "</table>";

// # Updating Data
/*
$query = "UPDATE cats SET name='Charlie' WHERE name='Charly'";
$result = $pdo->query($query);
*/

// # Deleting Data
/*
$query = "DELETE FROM cats WHERE name='Growler'";
$result = $pdo->query($query);
*/

// # Using AUTO_INCREMENT
/*
$query = "INSERT INTO cats VALUES(null, 'Lynx', 'Stumpy', 5)";
$result = $pdo->query($query);

echo "The Insert ID was: " .$pdo->lastInsertId();
*/

// # Using insert IDs
/*
$query = "INSERT INTO cats VALUES(null, 'Lynx', 'Stumpy', 5)";
$result = $pdo->query($query);
$insertID = $pdo->lastInsertId();

$query = "INSERT INTO owners VALUES($insertID, 'Ann', 'Smith')";
$result = $pdo->query($query);
*/

// # Performing Additional Queries
$query = "SELECT * FROM customers";
$result = $pdo->query($query);

while ($row = $result->fetch())
{
    $custname = htmlspecialchars($row['name']);
    $custisbn = htmlspecialchars($row['isbn']);

    echo "$custname purchased ISBN $custisbn: <br>";

    $subquery = "select * from classics where isbn='$custisbn'";
    $subresult = $pdo->query($subquery);
    $subrow = $subresult->fetch();

    $custbook = htmlspecialchars($subrow['title']);
    $custauth = htmlspecialchars($subrow['author']);

    echo "&nbsp;&nbsp; '$custbook' by $custauth<br><br>";
}