<?php
// Delete the cookie
setcookie("username", "", time() - 3600);

echo "Cookie deleted successfully.";
?>