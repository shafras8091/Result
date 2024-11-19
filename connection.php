<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "result_sheet"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}
//echo "Connected Successfully";
?>
