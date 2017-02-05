<?php
@session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
?>