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

//SELECT avg(age) as average_age FROM tablename
// SELECT avg(ratingNum) as average_age FROM ratingtable
// SELECT ratingNum FROM ratingtable

$sql = "SELECT avg(ratingNum) as average FROM ratingtable";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result); 

$average = $row['average'];

$roundedavg = round($average, 1);

//echo implode($row);
echo $roundedavg;

//echo implode($roundin);
//echo implode($myLastElementa);


// echo avg($result);

// echo $numratings;
// echo implode($numratings);

$conn->close();
?>