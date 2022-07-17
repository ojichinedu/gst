<?php
$servername = "localhost";
$database = "u582332157_gst";
$username = "u582332157_gst";
$password = "Globalseed1!";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
mysqli_close($conn);
?>