<?php
session_start();

// Check whether user is logged in
if (!isset($_SESSION["username"])) {

    // If not logged in, redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
</head>
<body>

<h2>Welcome to Home Page</h2>

<p>
    Welcome,
    <?php echo $_SESSION["username"]; ?>!
</p>

<a href="logout.php">Logout</a>

</body>
</html>