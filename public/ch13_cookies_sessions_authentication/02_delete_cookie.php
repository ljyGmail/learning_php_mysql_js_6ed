<?php
// # Destroying a Cookie
setcookie('location', 'USA', time() - 2592000, '/');

echo '<a href="index.html">Index</a><br><br>';
echo "A cookie named 'location' is removed.";