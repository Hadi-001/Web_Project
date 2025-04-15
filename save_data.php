<?php
session_start();
include 'connection.php';
if (isset($_POST['test_type'], $_POST['score'], $_SESSION['user_id'])) {
    $test_type = $_POST['test_type'];

    $first_word = explode(' ', trim($test_type))[0];

    $score = (double) $_POST['score'];
    $user_id = $_SESSION['user_id'];
    $test_date = date("Y-m-d H:i:s");

    $stmt = $connection->prepare("INSERT INTO TEST_SCORE (user_id, score, test_type, test_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("idss", $user_id, $score, $first_word, $test_date);
    $stmt->execute();

    echo json_encode(["success" => true]);
} 
else {
    echo json_encode(["success" => false, "error" => "Missing data"]);
}

?>
