<?php
// # HTML5 Enhancements
echo '<a href="index.html">Index</a><br><br>';

// # The autocomplete Attribute
echo <<<_END
<!-- # The autocomplete Attribute -->
<form action="07_html5_enhancements.php" method="post" autocomplete="on">
    <input type="text" name="username">
    <input type="password" name="password" autocomplete="off">
</form>

<!-- # The autofocus Attribute -->
<input type="text" name="query" autofocus="autofocus">
<br>

<!-- # The placeholder Attribute -->
<input type="text" name="name" size="50" placeholder="First & Last name">
<br>

<!-- # The required Attribute -->
<input type="text" name="creditcard" required="required">
<br>

<!-- # Override Attributes -->
<form action="url1.php" method="post">
    <input type="text" name="field">
    <input type="submit" formaction="url2.php">
</form>

<!-- # The width and height Attributes -->
<input type="image" src="img.png" width="120" height="80">
<br>

<!-- # The min and max Attributes -->
<input type="time" name="alarm" value="07:00" min="05:00" max="09:00">

<!-- # The step Attribute -->
<input type="time" name="meeting" value="12:00" min="09:00" max="16:00" step="3600">

<!-- # The form Attribute -->
<form action="myscript.php" method="post" id="form1">
</form>

<input type="text" name="username" form="form1">
<br>

<!-- # The list Attribute -->
Select destination:
<input type="url" name="site" list="links">

<datalist id="links">
    <option label="Google" value="http://google.com">
    <option label="Yahoo!" value="http://yahoo.com">
    <option label="Bing" value="http://bing.com">
    <option label="Ask" value="http://ask.com">
</datalist>
<br>

<!-- # The color Input Type -->
Choose a color <input type="color" name="color">
<br>

<!-- # The number and range Input Types -->
<input type="number" name="age">
<br>
<input type="range" name="num" min="0" max="100" value="50" step="1">
<br>

<!-- # Date and Time Pickers -->
<input type="time" name="time" value="12:34">
_END;