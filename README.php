<?php

$servername = "localhost";
$username = "id13604468_asish";
$password = "Paralakhemundi@123";
$database = "id13604468_newdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo "Not connected";
}
echo "Connected successfully..hello";
?>
