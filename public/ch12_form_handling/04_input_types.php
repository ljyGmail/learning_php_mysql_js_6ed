<?php
// # Input Types
echo '<a href="index.html">Index</a><br><br>';

echo <<<_END
<!-- # Text boxes -->
<input type="text" name="name" size="20" maxlength="18" value="php mysql">
<br><br>

<!-- # Text area -->
<!-- wrap: off, soft, hard -->
<textarea name="name" cols="10" rows="5" wrap="soft">
    This is some default text.
</textarea>
<br><br>

<!-- # Checkboxes -->
I Agree <input type="checkbox" name="agree" value="1">
<br>
Subscribe? <input type="checkbox" name="news" checked="checked">
<br>
<!-- Offering multiple checkbox choices -->
   Vanilla <input type="checkbox" name="ice" value="Vanilla">
 Chocolate <input type="checkbox" name="ice" value="Chocolate">
Strawberry <input type="checkbox" name="ice" value="Strawberry">
<br>

<!-- Submitting multiple values with an array -->
   Vanilla <input type="checkbox" name="ice[]" value="Vanilla">
 Chocolate <input type="checkbox" name="ice[]" value="Chocolate">
Strawberry <input type="checkbox" name="ice[]" value="Strawberry">
<br><br>

<!-- # Radio buttons -->
8am-Noon<input type="radio" name="time" value="1">
Noon-4pm<input type="radio" name="time" value="2" checked="checked">
4pm-8m<input type="radio" name="time" value="2">
<br><br>

<!-- # Hidden fields -->
<input type="hidden" name="submitted" value="yes">

<!-- # <select> -->

<!-- Using <select> -->
Vegetables
<select name="veg" size="1">
    <option value="Peas">Peas</option>
    <option value="Beans" selected="selected">Beans</option>
    <option value="Carrots">Carrots</option>
    <option value="Cabbage">Cabbage</option>
    <option value="Broccoli">Broccoli</option>
</select>
<br><br>

<!-- Using <select> with the multiple attribute -->
Vegetables
<select name="veg" size="5" multiple="multiple">
    <option value="Peas">Peas</option>
    <option value="Beans">Beans</option>
    <option value="Carrots">Carrots</option>
    <option value="Cabbage">Cabbage</option>
    <option value="Broccoli">Broccoli</option>
</select>
<br><br>

<!-- Labels -->
<label>8am-Noon<input type="radio" name="time" value="1"></label>
<br><br>

<!-- The submit button -->
<input type="submit" value="Search">
<br>
<input type="image" value="Search" src="img.png">
<br>
_END;

/*
// Iterator through submitted multiple checkboxes
$ice = $_POST['ice'];

foreach ($ice as $item)
    echo "$item<br>";

// check whether a hidden field is submitted
if (isset($_POST['submitted']))
{

}
*/