<?php
// Read the cookie
if (isset($_COOKIE["username"])) {
    echo "Username stored in cookie: " . $_COOKIE["username"];
} else {
    echo "Cookie is not set.";
}
?>