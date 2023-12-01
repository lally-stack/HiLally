<?php
$hostname = "localhost"; //127.0.0.1
$username = "root";
$password = "";
$database = "test";
$port = "3307";
// connection 
$conn = mysqli_connect($hostname, $username, $password, $database, $port);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "<script>console.log('Connected successfully " . $conn->host_info . "');</script>";
