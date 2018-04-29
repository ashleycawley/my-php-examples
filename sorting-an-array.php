<?php

// A string of numbers in no particular order
$string = '1 80 5 78 42 6 3 9 10';

// Exploding the string into an array
$numbers = explode ( ' ', $string); # This creates a new array called "numbers"

// Sort the array
sort ( $numbers ); # Sorts the newly created array

// Convert the array to a string
$output = implode( ',', $numbers ); # Takes the array from above and puts it back into a string and variable

// Output a string of numbers low to high
echo "$output";

?>