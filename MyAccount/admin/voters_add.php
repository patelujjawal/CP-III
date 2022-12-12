<?php
	include 'includes/session.php';

	if(isset($_POST['add'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$filename = $_FILES['photo']['name'];
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
		$AadharCopy = $_FILES['aadhar']['name'];
		$TownVillage = $_POST['tv1'];
		$Ccity = $_POST['city1'];
		if(!empty($filename)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$filename);	
		}
		if(!empty($AadharCopy)){
			move_uploaded_file($_FILES['photo']['tmp_name'], '../images/'.$AadharCopy);	
		}
		// //generate voters id
		// $set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		// $voter = substr(str_shuffle($set), 0, 15);

		$sql = "INSERT INTO voters (`voters_id`, `password`, `firstname`, `lastname`, `photo`, `BirthDate`, `Gender`, `PhoneNumber`, `MetaMask`, `Email`, `Street1`, `Street2`, `Town`, `Pincode`, `State`, `City`, `AadharCopy`, `Ccity`, `TownVillage`) VALUES ('$voters_id', '$password', '$firstname', '$lastname', '$filename','$BirthDate','$Gender','$PhoneNumber','$MetaMask','$Email','$Street1','$Street2','$Town','$Pincode','$State','$City','$AadharCopy','$Ccity','$TownVillage')";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Voter added successfully';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: voters.php');
?>