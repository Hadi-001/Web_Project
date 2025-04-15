<?php
require_once 'connection.php'; 


    
    $username = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format.");
    }

    $stmt = $connection->prepare("INSERT INTO FEEDBACK (username, email, message) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $username, $email, $message);

    if ($stmt->execute()) {
        echo "Thank you for your feedback!";
        header("Location: contactUS.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $connection->close();


?>
