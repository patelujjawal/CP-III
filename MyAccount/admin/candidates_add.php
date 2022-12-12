<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$position = $_POST['position'];
		$platform = $_POST['platform'];
		$filename = $_FILES['photo']['name'];
		$symbol = $_FILES['symbol']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);
		move_uploaded_file($_FILES['symbol']['tmp_name'], '../images/'.$symbol);

		$sql = "INSERT INTO candidates (position_id, firstname, lastname, symbol, photo, platform) VALUES ('$position', '$firstname', '$lastname', '$symbol', '$filename', '$platform')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Candidate added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: candidates.php');
?>