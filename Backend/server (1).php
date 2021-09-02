<?php
 
 	session_start();

	$username = "";
	$reg = "";
	$errors = array();


	//connect to database
	$db = mysqli_connect('localhost','root','','registration');

	//if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db,$_POST['username']);
		$reg = mysqli_real_escape_string($db,$_POST['reg']);
		$password_1 = mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db,$_POST['password_2']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors,"Username is required");
		}
		if (empty($reg)) {
			array_push($errors,"reg is required");
		}
		if (empty($password_1)) {
			array_push($errors,"Password is required");
		}
		if ($password_1 != $password_2) {
			array_push($errors,"The two passwords do not match");
		}

	

		// If no errors, push data to database
		if(count($errors) == 0) {
			$password = md5($password_1); //password encryption
			$sql = "INSERT INTO users (username, reg, password)
							VALUES ('$username', '$reg', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
  			$_SESSION['success'] = "You are now logged in";
  			header('location: homepage.php'); //redirect to dashboard
		}
	}

	// LOGIN USER
	if (isset($_POST['login'])) {
 	   		$reg = mysqli_real_escape_string($db, $_POST['reg']);
  			$password = mysqli_real_escape_string($db, $_POST['password']);

  			if (empty($reg)) {
  				array_push($errors, "reg is required");
  			}
  			if (empty($password)) {
  				array_push($errors, "Password is required");
  			}

  			if (count($errors) == 0) {
  				$password = md5($password); //encrypt paswd beforing comparing with db
  				$query = "SELECT * FROM users WHERE reg='$reg' AND password='$password'";
  				$result = mysqli_query($db, $query);
  				if (mysqli_num_rows($result) == 1) {
  	  				$_SESSION['username'] = $username;

  	  				header('location: homepage.php');
  				}else {
  					array_push($errors, "Wrong reg/password combination");
  				}
  			}
 	}

 	//logout
 	if (isset($_GET['logout'])) {
 		session_destroy();
 		unset($_SESSION['username']);
 		header('location: homepage.php');
 	}

?>