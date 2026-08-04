<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<form method="post">
    Enter Name:
    <input type="text" name="username">
    <input type="submit" name="submit" value="Save">
</form>

<?php
if (isset($_POST['submit'])) {
    $name = $_POST['username'];

    // Create cookie (expires in 1 hour)
    setcookie("username", $name, time() + 3600);

    echo "Cookie created successfully!";
}
?>

</body>
</html>