<?php
$servername = "localhost";
$username = "root";
$password = "";
// Nếu có cổng khác 3306 thì phải thêm $port = 3306;
$database = "ql_web_phim";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>