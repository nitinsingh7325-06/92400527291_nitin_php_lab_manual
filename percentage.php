<?php

function calculatePercentage($subject1, $subject2, $subject3, $subject4, $subject5) {
    
    $totalMarks = $subject1 + $subject2 + $subject3 + $subject4 + $subject5;
    
    $percentage = ($totalMarks / 500) * 100;
    
    // Return the percentage
    return $percentage;
}

$result = calculatePercentage(85, 90, 78, 88, 92);
echo "Total Percentage: " . $result . "%";
?>