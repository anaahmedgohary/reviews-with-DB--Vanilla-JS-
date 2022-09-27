<?php
include "conn2mrblister.php";

$underRev = $_POST['underRev'];
$ratingNum = $_POST['ratingNum'];
$reviewP = $_POST['reviewP'];
$raterName = $_POST['raterName'];
$raterEmail = $_POST['raterEmail'];

// prepare and bind
$stmt = $conn->prepare("INSERT INTO ratingtable (busiName, ratingNum, reviewP, raterName, raterEmail) 
VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $underRev, $ratingNum, $reviewP, $raterName, $raterEmail);
$stmt->execute();

echo "New records created successfully";
$stmt->close();
$conn->close();
?>