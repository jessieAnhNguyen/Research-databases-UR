<?php
$servername = "localhost";
$username = "ashrest2";
$password = "betawebP01000001ssword!";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

?>

