<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Query to check if the username or email already exists
    $stmt = $connection->prepare("SELECT * FROM ACCOUNT WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email); 
    $stmt->execute();
    $result = $stmt->get_result();

    // Response array to send back to AJAX
    $response = ["username" => true, "email" => true];

    // Check if username or email already exists in the database
    while ($row = $result->fetch_assoc()) {
        if ($row['username'] === $username) {
            $response['username'] = false;  // Username exists
        }
        if ($row['email'] === $email) {
            $response['email'] = false;  // Email exists
        }
    }

    // Send response as JSON to the AJAX request
    echo json_encode($response);
}
?>
