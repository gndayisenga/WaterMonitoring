<?php
$errormessage;
$successmessage;
$conn = new mysqli("localhost", "root", "",  "iot_water");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

