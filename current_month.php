<?php
$month = date("F");

echo "Current Month: " . $month . "<br><br>";

// Using if...else
if ($month == "January") {
    echo "Month is January<br>";
} else {
    echo "Month is not January<br>";
}

// Using switch
switch ($month) {
    case "June":
        echo "Current month is June";
        break;

    case "July":
        echo "Current month is July";
        break;

    default:
        echo "Another month";
}
?>