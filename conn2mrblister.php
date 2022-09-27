<?php
$servername = "localhost";
$username = "pma";
$password = "";
$dbname = "mrblister";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


 /* $stmt = $conn->prepare("INSERT INTO ratingtable (ratingNum, reviewP, raterName, raterEmail) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $ratingNum, $reviewP, $raterName, $raterEmail);
$ratingNum = $_POST['ratingNum'];
$reviewP = $_Post['reviewP'];
$raterName = $_Post['raterName'];
$raterEmail = $_Post['raterEmail'];
$stmt->execute();
echo "New records created successfully";
$stmt->close();
$conn->close(); */
?>