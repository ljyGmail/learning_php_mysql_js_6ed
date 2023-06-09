<?php
// # Default Values
echo '<a href="index.html">Index</a><br><br>';

echo <<<_END
    <html>
        <head>
            <title>Default Values</title>
        </head>
        <body>
        <form method="post" action="03_default_values.php"><pre>
            Loan Amount <input type="text" name="principal">
        Number of Years <input type="text" name="years" value="15">
          Interest Rate <input type="text" name="interest" value="3">
                        <input type="submit">
        </pre></form>
        </body>
    </html>
_END;