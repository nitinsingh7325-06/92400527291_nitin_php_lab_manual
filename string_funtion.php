<?php
// Types of functions
// 1. Built-in Functions
// 2. UDF
// String Functions are built-in functions.

$str1 = "    Nitin    ";
$str2 = "singh";

echo "echo" . " " . $str1 . " " . $str2;
echo "<br>";
print("print" . " " . $str1 . " " . $str2);

echo "<br>";
echo strtoupper($str1);
echo "<br>";
echo strtolower($str1);
echo "<br>";

echo "Before trim ";
echo strlen($str1 . $str2);
echo "<br>";
$timmedstring = rtrim($str1);

echo "After trim ";
echo strlen($timmedstring . $str2);

echo "<br>";
echo str_replace($str1,"Singh",$str1);

echo "<br>";
echo strrev($str1);

echo "<br>";
echo strcmp("Hello","Hello");

echo "<br>";
echo ucwords("i am student in marwadi university");

echo "<br>";
echo ucfirst("i am student in marwadi university");

echo "<br>";
echo strstr($str1,"A");

echo "<br>";
echo stristr($str1,"A");
//stristr() i stands for case sensitive data


?>