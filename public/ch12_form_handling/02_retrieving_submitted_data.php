<?php
// # Retrieving Submitted Data
echo '<a href="index.html">Index</a><br><br>';

if (!empty($_POST['name']))
    $name = $_POST['name'];
else
    $name = "(Not Entered)";

echo <<<_END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
            Your name is: $name<br>
            <form method="post" action="02_retrieving_submitted_data.php">
                What is your name?
                <input type="text" name="name">
                <input type="submit">
            </form>
        </body>
    </html>
_END;