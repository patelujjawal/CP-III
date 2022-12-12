
<?php include 'includes/header.php'; ?>
<html>
<head>
  <meta charset="UTF-8">
  <title>My Account</title>
  <link rel='stylesheet'><link rel="stylesheet" href="css/Signin.css">
  
</head>
<body>
<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
  
  	<h2>Login for Vote</h2>
	<div class="container" id="container">
	<div class="form-container sign-in-container">
			<form action="login.php" method="POST">
				<h1>Sign in</h1><br /><br />
				<input type="text" class="form-control" name="voter" placeholder="AadharCard" required><br />
				<input type="password" class="form-control" name="password" placeholder="Password" required><br /><br />
				<button name = "login">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Hello, Voter's!</h1>
					<p>Enter your personal details and start voting today</p>
					<button class="ghost" id="signUp" ><a href="Registration.php"> Sign Up</button>
				</div>
			</div>
		</div>
	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
<script  src="./script.js"></script>
<?php include 'includes/scripts.php' ?>
</body>
</html>