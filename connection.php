<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $host = "localhost";
    $data_base_name = "web_project_db";
    $user = "root";
    $pass = "";

    $connection = new mysqli($host, $user, $pass, $data_base_name);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
}
?>