<?php
	$servername = "test.andre-spinnler.de";
	$username = "test";
	$password = "#anpisp@TEST42.01";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT * FROM test";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		print_r($row);
    }
}
else {
	echo "0 results";
}


$conn->close();
?>