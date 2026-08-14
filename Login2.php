<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Example username and password
    if ($username == "admin" && $password == "12345") {

        $_SESSION["username"] = $username;

        header("Location: home.php");
        exit();

    } else {
        $error = "Invalid Username or Password";
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

<?php
if ($error != "") {
    echo "<p style='color:red;'>$error</p>";
}
?>

<form method="post">

    Username:
    <input type="text" name="username" required>
    <br><br>

    Password:
    <input type="password" name="password" required>
    <br><br>

    <input type="submit" value="Login">

</form>

</body>
</html>