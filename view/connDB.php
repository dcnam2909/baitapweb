<?php
    $conn;
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlybanhang";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (!$conn) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
?>