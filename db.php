 <?php
$servername = "localhost";
$username = "u999002100_user_db1";
$password = "user_db@123";
$dbname = "u999002100_user_db";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> 