<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_practical"
);

if (!$conn) {
    die("Connection failed");
}

$id = 1;

$sql = "DELETE FROM students WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    echo "Data deleted successfully.";
} else {
    echo "Error deleting data.";
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

?>