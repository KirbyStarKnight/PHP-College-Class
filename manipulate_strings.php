>?php

// Function 1:

// This function compares two strings.

echo strcmp("Rachel Brandon", "Rachel Brandon"); // the two strings are equal
echo strcmp("Rachel Brandon", "Rachel"); // string 1 is greater than string 2
echo strcmp("Rachel Brandon", "Rachel Brandon is cool!"; // String 1 is less than string 2

// Function 2

// This function compares two string like the previous function but this one is not case sensitive.

echo strcasecmp("Rachel Brandon", "RACHEL BRANDON"); // the two strings are equal
echo strcasecmp("RACHEL BRANDON", "Rachel Brandon"; // the two strings are equal
echo strcasecmp("Rachel Brandon", "RACHEL"; // String 1 is greater than string 2
echo strcasecmp("RACHEL BRANDON", "Rachel Brandon is cool!"; // String 1 is less than string 2

// Function 3

// This function searches for the first occurence of a string inside another string.

echo strstr("Rachel Brandon", "rachel"); // This finds the first occurence of "rachel" inside "Rachel Brandon" and return the rest of the string.

?>
