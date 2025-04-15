<?php
include 'connection.php';
$response = ["success" => false];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $connection->prepare("SELECT * FROM ACCOUNT WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row["password"])) {
            $response["success"] = true;
            // Optionally start session
            // session_start();
            // $_SESSION["user_id"] = $row["id"];
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>
