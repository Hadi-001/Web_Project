<?php
session_start();  // Start the session at the beginning
include 'connection.php';
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    // Prepare statement to check if the username exists
    $stmt = $connection->prepare("SELECT password,id FROM ACCOUNT WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
 
    if ($result->num_rows === 0) {
        // Username doesn't exist
        echo "<script>alert('Invalid credentials'); window.location.href='index.php';</script>";
    } else {
        $row = $result->fetch_assoc();
 
        // Compare entered password with stored password
        if ($password === $row['password']) {
            // Password is correct
            $_SESSION['user_id'] = $row['id'];
            header("Location: Home.php");
            exit();
        } else {
            // Incorrect password
            echo "<script>alert('Invalid credentials'); window.location.href='index.php';</script>";
        }
    }
 
    // Close statement and connection
    $stmt->close();
    $connection->close();
}
?>