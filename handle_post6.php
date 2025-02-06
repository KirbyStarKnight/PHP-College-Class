<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Forum Posting</title>
</head>
<body>
<?php // Script 5.7 - handle_post7.php
/* This script recieves five values from posting.html:
first_name, last_name, email, posting, submit */

// Address error management, if you want.

// Get the values from the $_POST array:
$first_name = trim($_POST['first_name']);
$last_name = trim($_POST['last_name']);
$posting = trim($_POST['posting']);

// Create a full name variable:
$name = $first_name . ' ' . $last_name;

// Get a word count:
$words = str_word_count($posting);

// Take out the bad words:
$posting = str_ireplace('badword', 'XXXX', $posting);

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>$posting</p>
<p>$posting</p>
<p>($words words)</p></div>";

// Make a link to another page:
$name = urlencode($name);
$email = urlencode($_POST['email']);
print "<p>Click <a href=\"thanks.php? name=$name&email=$email\">here</a> to continue.</p>";

?>
</body>
</html>