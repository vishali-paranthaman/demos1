<?php
// Check if form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from POST data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

    // Simple validation for email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h1>Invalid email format</h1>";
        exit;
    }

    // Simulate processing (e.g., saving to a database or sending an email)
    echo "<h1>Welcome to MyBiz, $email!</h1>";
    echo "<p>Your work email has been submitted successfully.</p>";
} else {
    echo "<h1>Unauthorized Access</h1>";
    exit;
}
?>
