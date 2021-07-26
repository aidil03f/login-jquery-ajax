<?php
	$conn = mysqli_connect('localhost','root','','login');
	session_start();

	if($_POST['type'] == 1){
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$check = mysqli_query($conn,"select * from users where email='$email' and password='$password'");
		if (mysqli_num_rows($check) > 0)
		{
			$_SESSION['email'] = $email;
			echo json_encode(array("statusCode" => 200));
		}
		else{
			echo json_encode(array("statusCode" => 201));
		}
		mysqli_close($conn);
	}
?>