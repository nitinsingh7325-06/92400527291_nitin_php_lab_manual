<?php
// 1. Numeric Array for Days (Monday to Saturday)
echo "<h2>1. Numeric Array for Days (Monday to Saturday)</h2>";
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

// Display numeric array
echo "<strong>Days of week:</strong><br>";
foreach($days as $index => $day) {
    echo "Index $index: $day<br>";
}

echo "<br>";

// 2. Associative Array for Months with Total Days
echo "<h2>2. Associative Array - Months and Days</h2>";
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

// Display associative array
echo "<strong>Months and their total days:</strong><br>";
foreach($months as $month => $days_count) {
    echo "$month has $days_count days<br>";
}

echo "<br>";

// 3. Multidimensional Array for Laptops
echo "<h2>3. Multidimensional Array - Laptops</h2>";
$laptops = array(
    "Dell" => array(
        array("model" => "XPS 13", "price" => 1200),
        array("model" => "Inspiron 15", "price" => 800),
        array("model" => "Latitude 14", "price" => 950)
    ),
    "HP" => array(
        array("model" => "Spectre x360", "price" => 1400),
        array("model" => "Pavilion 15", "price" => 700),
        array("model" => "Envy 13", "price" => 1100)
    )
);

// Display multidimensional array
echo "<strong>Laptop Details:</strong><br>";
foreach($laptops as $company => $models) {
    echo "<br><strong>Company: $company</strong><br>";
    foreach($models as $laptop) {
        echo "Model: " . $laptop['model'] . " - Price: $" . $laptop['price'] . "<br>";
    }
}

echo "<br>";
echo "<hr>";
?>