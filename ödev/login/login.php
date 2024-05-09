<?php
// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the POST request
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Normally, you would validate these credentials against a database
    // For the sake of simplicity, let's assume valid credentials are 'admin' and 'password'
    if ($username === 'admin' && $password === 'password') {
        // Set session variables
        session_start();
        $_SESSION['username'] = $username;
        // Respond with success message
        echo json_encode(['success' => true]);
    } else {
        // Respond with error message
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
    }
} else {
    // Respond with error message
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
}
?>
