<?php
// Short program for type casting

// Create a variable
$value = "123.45";
echo "Original: $value (Type: " . gettype($value) . ")<br>";

// Convert to integer
settype($value, "int");
echo "After int: $value (Type: " . gettype($value) . ")<br>";

// Convert to float
settype($value, "float");
echo "After float: $value (Type: " . gettype($value) . ")<br>";

// Convert to string
settype($value, "string");
echo "After string: $value (Type: " . gettype($value) . ")<br>";

// Convert to boolean
settype($value, "bool");
echo "After bool: " . ($value ? "true" : "false") . " (Type: " . gettype($value) . ")<br>";

// Convert to array
settype($value, "array");
echo "After array: ";
print_r($value);
echo " (Type: " . gettype($value) . ")<br>";
?>