<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Lab 8 Q3</title>
</head>
<body>
<?php
// 1. Write a function named calculateArea
// It accepts two parameters ($length and $width) function calculateArea($length, $width) {
$area = $length * $width;

// The instructions specifically say to RETURN the area return $area;
}

// 2. Call the function with values of your choice
// (I used 4 and 2 to match the screenshot example)
$length = 120;
$width = 5;

$result = calculateArea($length, $width);
// 3. Display the result
// Using <b> tags to make it bold like the screenshot
echo "<b>The area of a rectangle with a width of $length and $width is $result</b>";
?>
</body>
</html>
