<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php // Script 7.1 - soups1.php
/* This script creates and prints out an array. */
// Address Error managment, if you want.

// Create the array:
$soups = [
	'Monday' => 'Clam Chowder',
	'Tuesday' => 'White Chicken Chili',
	'Wednesday' => 'Vegetarian'
];

// Doesn't work
// Try to print the array:
//print p>$soups</p>";

// Print out the contents of the array:
print_r($soups);

?>
</body>
</html>