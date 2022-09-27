<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$servername='localhost';
$user = 'pma';
$password = '';

// Database name is geeksforgeeks
$database = 'mrblister';

// Server is localhost with
// port number 3306

$conn = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($conn->connect_error) {
	die('Connect Error (' .
	$conn->connect_errno . ') '.
	$conn->connect_error);
}

// SQL query to select data from database
//$sql = " INSERT INTO ratingtable (ratingNum, reviewP, raterName, raterEmail) VALUES ('3', 'YUTU', 'FFFFD', 'GHFGHGH')";
$sql = " SELECT noofratings FROM ratingtable ";
$result = mysqli_query($conn, $sql);
// fetch as array
$numratings = mysqli_fetch_all($result, MYSQLI_ASSOC);

//print_r($numratings);
$myLastElement = end($numratings);
echo implode($myLastElement);
//echo htmlspecialchars($myLastElement);
//htmlspecialchars($numra)




/* if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo  $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  } */

$conn->close();
?>
<!-- HTML code to display data in tabular format -->


<!-- PHP CODE TO FETCH DATA FROM ROWS -->


<!-- foreach($cart as $line=>$item)
{ -->

