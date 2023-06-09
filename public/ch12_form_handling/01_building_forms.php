<?php
// # Building Forms
echo '<a href="index.html">Index</a><br><br>';

echo <<<_END
    <html>
        <head>
            <title>Form Test</title>
        </head>
        <body>
        <form method="post" action="01_building_forms.php">
            What is your name?
            <input type="text" name="name">
            <input type="submit">
        </form>
        </body>
    </html>
_END;