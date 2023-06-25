<?php
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    // Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(userName, password) values(?, ?)");
		$stmt->bind_param("s,s", $userName, $password);
		$stmt->execute();
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>