<?php
	$servername = "87.106.126.123:3306";
	$username = "test";
	$password = "#anpisp@TEST42.01";
	$dbname = "test";
	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!($stmt=$conn->prepare("SELECT * FROM test t"))){
		header("HTTP/1.0 500 Internal DB error");
	};
	
	if ($conn->connect_error) {
		header("HTTP/1.0 500 Internal DB error");
	}
	
	if (!($stmt->execute())) {
		header("HTTP/1.0 500:".$sql."<br>".$conn->error);
	}
	$stmt->store_result();
	$stmt->bind_result($row);

	while($stmt->fetch()){
		echo "Hallo: ".$row;
	}

	$conn->close();
?>