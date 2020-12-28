<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "quanlybanhang";

$GLOBALS['conn'] = mysqli_connect($host, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die();
}
?>