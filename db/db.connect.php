<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vigyananportal";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$url=$_SERVER["HTTP_HOST"];
$file=$_SERVER["DOCUMENT_ROOT"];
?>