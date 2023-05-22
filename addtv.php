<?php
include("database.php");

$title = $_POST["title"];
$vid = $_POST["vid"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tvinfo (title, vid) VALUES ('" . $title . "', '" . $vid . "')";

$conn->query($sql);
$conn->close();
header("Location: tvlist.php");
?>