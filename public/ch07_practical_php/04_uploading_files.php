<?php
// # Uploading Files
echo '<a href="index.html">Index</a><br><br>';

echo <<<_END
    <html>
        <head>
            <title>PHP Form Upload</title>
        </head>
        <body>
            <form method='post' action='04_uploading_files.php' enctype='multipart/form-data'>
                Select File: <input type='file' name='filename' size='10'>
                <input type='submit' value='Upload'>
            </form>
_END;

if ($_FILES)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    // # Using $_FILES
    echo "The name of the uploaded file: " . $_FILES['filename']['name'] . "<br>";
    echo "The content type of the file: " . $_FILES['filename']['type'] . "<br>";
    echo "The size of the file in bytes: " . $_FILES['filename']['size'] . "<br>";
    echo "The name of the temporary file stored on the server: " . $_FILES['filename']['tmp_name'] . "<br>";
    echo "The error code resulting from the file upload: " . $_FILES['filename']['error'] . "<br>";

    echo "Uploaded image '$name'<br><img src='$name'>";
}

echo "</body></html>";