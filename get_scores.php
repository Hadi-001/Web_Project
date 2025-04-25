<?php 
    session_start();
    require_once 'connection.php';

    header('Content-Type: application/json');

    if(!isset($_SESSION['user_id'])){
        exit;
    }

    $user_id = $_SESSION['user_id'];
    $tests = ['stress','anxiety','depression'];
    $data = [];

    foreach($tests as $test){
        $stmt = $connection->prepare("
        SELECT score, test_date
        FROM TEST_SCORE T
        WHERE T.user_id = ? AND T.test_type = ? 
        ORDER BY T.test_date DESC
        LIMIT 7
        ");

        $stmt->bind_param("is",$user_id,$test);
        $stmt->execute();
        $stmt->bind_result($score,$date);

        $scores = [];
        $dates = [];
        while($stmt->fetch()){
            array_unshift($scores,$score);
            array_unshift($dates,$date);
        }

        $data[$test] = [ "scores" => $scores, "dates" => $dates];
        $stmt->close();
    }

    echo json_encode(["success" => true, "data" => $data]);
?>