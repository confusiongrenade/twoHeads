<?php
$servername = "localhost";
$username = "";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = "SELECT * FROM loginTest";
$result = $conn->QUERY($sql);

if ($result->num_rows > 0) {

// out out data of each row

while($row  =  $result->fetch_assoc()) {

	echo "name : " . $row["name"];
}
} else {
	echo "0 results";
}

$conn->close();
?>
