<?php
    session_start();
    require_once 'connection.php';

    header("Content-Type: application/json");

    if(!isset($_SESSION['user_id'])){
        echo json_encode(["success" => false, "message" => "User not authenticated."]);
        exit;
    }

    $user_id = $_SESSION['user_id'];

    $json_data = json_decode(file_get_contents("php://input"),true);
    $cur_pass = $json_data['cur_pass'];
    $new_pass = $json_data['new_pass'];

    $stmt = $connection->prepare("SELECT password FROM ACCOUNT WHERE id = ?");
    $stmt->bind_param("i",$user_id);
    $stmt->execute();
    $stmt->bind_result($pass_from_db);
    $stmt->fetch();
    $stmt->close();

    if(!password_verify($cur_pass,$pass_from_db)){
        echo json_encode(["success" => false, "message" => "Incorrect current password."]);
        exit;
    }

    $new_hash = password_hash($new_pass, PASSWORD_DEFAULT);
    $update_q = $connection->prepare("UPDATE ACCOUNT SET password = ? WHERE id = ?");
    $update_q->bind_param("si",$new_hash,$user_id);

    if($update_q->execute()){
        echo json_encode(["success" => true, "message" => "Password updated successfully"]);
    }else{
        echo json_encode(["success" => false, "message" => "Failed to update password"]);
    }
    $update_q->close();
    $connection->close();
?>

