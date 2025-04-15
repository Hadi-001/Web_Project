<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    $sql = "INSERT INTO ACCOUNT (username, password, firstname, lastname, email) VALUES (?, ?, ?, ?, ?)";
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("sssss", $username, $hashed_password, $firstname, $lastname, $email);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }

    $stmt->close();
    $connection->close();
}
?>