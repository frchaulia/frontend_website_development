<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$birth = $_POST['birth'];
	$gender = $_POST['gender'];
	$address = $_POST['address']
	$number = $_POST['number'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName,birth, gender, address, number, email, password) values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $birth, $gender, $address, $number, $email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>