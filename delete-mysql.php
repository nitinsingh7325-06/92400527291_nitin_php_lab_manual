<?php
$conn = new mysqli("localhost", "root", "", "cricket_academy");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = 2;

$sql = "DELETE FROM users WHERE id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully.";
} else {
    echo "Error deleting record.";
}

$stmt->close();
$conn->close();
?>