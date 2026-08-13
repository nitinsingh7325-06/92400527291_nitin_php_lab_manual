<?php
session_start();

// If user is already logged in, go to home page
if (isset($_SESSION["username"])) {
    header("Location: home.php");
    exit();
}

$message = "";

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simple username and password
    if ($username == "admin" && $password == "12345") {

        // Create login session
        $_SESSION["username"] = $username;

        // Redirect to home page
        header("Location: home.php");
        exit();

    } else {
        $message = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<form method="post" action="">
    <label>Username:</label>
    <input type="text" name="username" required>
    <br><br>

    <label>Password:</label>
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" name="login" value="Login">
</form>

<p><?php echo $message; ?></p>

</body>
</html>