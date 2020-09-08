<?php 
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$connect = new mysqli('localhost','root','','web');
	if ($connect->connect_error) {
		die('Connection Failed!'.$connect->connect_error);
	}
	else{
		$statement = $connect->prepare("insert into registration(firstName, lastName, email, password, confirmPassword) value(?,?,?,?,?)");
		$statement->bind_param("sssss",$firstName, $lastName, $email, $password, $confirmPassword);
		$statement->execute();
		echo "<script type=\"text/javascript\">".
        "alert('success');".
        "</script>";
		//echo "You have completed Registration succesfully!";
		header("Location: login.html");
		$statement->close();
		$connect->close();

	}
 ?>