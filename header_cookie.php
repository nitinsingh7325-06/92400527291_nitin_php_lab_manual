<?php
setcookie("username", "John", time() + 3600);

// Redirect to another page
header("Location: read_cookie.php");
exit();
?>