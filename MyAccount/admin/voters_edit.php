<?php
	include 'includes/session.php';

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = $_POST['password'];
		$BirthDate = $_POST['birth_date'];
		$Gender= $_POST['gender'];
		$PhoneNumber = $_POST['phone_number'];
		$MetaMask = $_POST['mm'];
		$voters_id = $_POST['aadhar_card'];
		$Email = $_POST['email'];
		$Street1 = $_POST['st1'];
		$Street2 = $_POST['st2'];
		$Town = $_POST['tv'];
		$Pincode = $_POST['pinc'];
		$State = $_POST['state'];
		$City = $_POST['city'];
		$TownVillage = $_POST['tv1'];
		$Ccity = $_POST['city1'];

		$sql = "SELECT * FROM voters WHERE id = $id";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		if($password == $row['password']){
			$password = $row['password'];
		}
		else{
			$password = password_hash($password, PASSWORD_DEFAULT);
		}

		$sql = "UPDATE voters SET firstname = '$firstname', lastname = '$lastname', password = '$password', `BirthDate`='$BirthDate',`Gender`='$Gender',`PhoneNumber`='$PhoneNumber',`MetaMask`='$MetaMask',`voters_id`='$voters_id',`Email`='$Email',`Street1`='$Street1',`Street2`='$Street2',`Town`='$Town',`Pincode`='$Pincode', `State`='$State',`City`='$City',`TownVillage`='$TownVillage',`Ccity`='$Ccity' WHERE id = '$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter updated successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Fill up edit form first';
	}

	header('location: voters.php');

?>