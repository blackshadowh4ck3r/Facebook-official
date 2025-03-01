<?php
// Read passwords from the text file
$file = 'passwords.txt';
$passwords = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inputPassword = $_POST['password'];

    // Check if the input password matches any in the file
    if (in_array($inputPassword, $passwords)) {
        echo "Password is correct!";
    } else {
        echo "Password is incorrect!";
    }
}
?>
