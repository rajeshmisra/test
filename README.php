<?php

$servername = "localhost";
$username = "root"
$password = "";
$database = "rfidattendance";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "Not connected";
}
echo "Connected successfully..hello";
?>
