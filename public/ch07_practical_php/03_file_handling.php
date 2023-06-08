<?php
// # File Handling
echo '<a href="index.html">Index</a><br><br>';

// # Checking Whether a File Exists
if (file_exists("testfile.txt"))
    echo "File exits<br>";
else
    echo "File doesn't exist<br> ";

// Creating a File
$fh = fopen("testfile.txt", 'w') or die("Failed to create file");

$text = <<<_END
Line 1
Line 2
Line 3
_END;

fwrite($fh, $text) or die("Could not write to file");
fclose($fh);
echo "File 'testfile.txt' written successfully<br>";

// # Reading from Files
$fh = fopen("testfile.txt", 'r') or
    die("File does not exist or you lack permission to open it");

$line = fgets($fh);
fclose($fh);
echo $line;
echo "<br>";

$fh = fopen("testfile.txt", 'r') or
    die("file does not exist or you lack permission to open it");

$text = fread($fh, 3);
fclose($fh);
echo $text;
echo "<br>";

// # Copying Files
copy('testfile.txt', 'testfile2.txt') or die("Could not copy file");
echo "File successfully copied to 'testfile2.txt'<br>";

// Alternate syntax for copying a file
if (!copy('testfile.txt', 'testfile2.txt'))
    echo "Cound not copy file";
else
    echo "File successfully copied to 'testfile2.txt'<br>";

// # Moving a File
if (!rename('testfile2.txt', 'testfile2.new'))
    echo "Could not rename file";
else
    echo "File successfully renamed to 'testfile2.new'<br>";

// # Deleting a File
if (!unlink('testfile2.new'))
    echo "Could not delete file";
else
    echo "File 'testfile2.new' successfully deleted<br>";

// # Updating Files
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);
fseek($fh, 0, SEEK_END);
// fseek($fh, 18, SEEK_SET); => moves the file pointer to position 18
// fseek($fh, 5, SEEK_CUR); => move the file pointer to position 23
fwrite($fh, "\n$text") or die("Could not write to file");
fclose($fh);

echo "File 'testfile.txt' successfully updated<br>";

// # Locking Files for Multiple Accesses
$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text = fgets($fh);

if (flock($fh, LOCK_EX))
{
    fseek($fh, 0, SEEK_END);
    fwrite($fh, "$text") or die("Could not write to file");
    flock($fh, LOCK_UN);
}

fclose($fh);
echo "File 'testfile.txt' successfully updated<br>";

// # Reading an Entire File
echo "<pre>";
echo file_get_contents("testfile.txt");
echo "</pre>";

// echo file_get_contents("http://oreilly.com"); // Request O'Reilly home page and display the page