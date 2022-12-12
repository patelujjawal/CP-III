<?php
	include 'includes/session.php';

	if(isset($_POST['upload'])){
		$id = $_POST['id'];
		$filename = $_FILES['photo']['name'];
		$symbol= $_FILES['symbol']['name'];
		move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		move_uploaded_file($_FILES['symbol']['tmp_name'], '../images/'.$symbol);
		
		
		$sql = "UPDATE candidates SET photo = '$filename', symbol='$symbol' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Photo updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Select candidate to update photo first';
	}

	header('location: candidates.php');
?>