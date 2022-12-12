<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form of E-Voting</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
    <div class="one">
      <h1>Registration Form of E-Voting </h1>
    </div> <br /><br />
        <section class="signup">

            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" enctype = "multipart/form-data" > <a>PERSONAL INFORMAATION</a> <br><br />

                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name"  placeholder="First Name"/>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" placeholder="Last Name"/>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>

                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phone_number" id="phone_number" placeholder="1234567890"/>
                        </div>
                        <div class="form-group">
                            <label for="mm">Metamask wallet address</label>
                            <input type="text" class="form-input" name="mm" id="mm"/>
                        </div>
                        <div class="form-group">
                            <label for="aadhar_card">Aadhar Card Number</label>
                            <input type="number" class="form-input" name="aadhar_card" id="aadhar_card" placeholder="1234-1234-1234"/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-input" name="email" id="email" placeholder="example@email.com"/>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password"/>
                            </div>
                        </div>
                        <div>
                            <label for="address">Address</label><br />
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="st1">House/Building/Apartment No.</label>
                                    <input type="text" class="form-input" name="st1" id="st1"/>
                                </div>
                                <div class="form-group">
                                    <label for="st2">Street/Area/Locality/Road</label>
                                    <input type="text" class="form-input" name="st2" id="st2"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="tv">Town/Village</label>
                                    <input type="text" class="form-input" name="tv" id="tv"/>
                                </div>
                                <div class="form-group">
                                    <label for="pinc">PINCODE</label>
                                    <input type="number" class="form-input" name="pinc" id="pinc"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-input" name="city" id="newcity"/>
                                </div>
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <input type="text" class="form-input" name="state" id="newstate"/>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="photo">Photo</label>
                                    <input type="file" class="form-input" name="photo" id="photo" multiple accept="image/*" />
                                </div>
                                <div class="form-group">
                                    <label for="aadhar">aadhar card</label>
                                    <input type="file" class="form-input" name="aadhar" id="aadhar"/>
                                </div>
                            </div>
                        </div>
                        <div class="form-text">
                            <a href="#" class="add-info-link"></i>DECLARATION</a>
                            <div>
                              <div class="form-group">
                                <h5>I HEREBY DECLARE that to the best of my knowledge and belief-</h5>
                                <h5>(i) I am a citizen of India and place of my birth is:- </h5>
                                <div class="form-row">
                                    <div class="form-group">
                                        <label for="tv">Town/Village</label>
                                        <input type="text" class="form-input" name="tv1" id="tv1"/>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-input" name="city1" id="city1"/>
                                    </div>
                                </div>
                                <h5>(ii) I am applying for inclusion in Electoral Roll for the first time and my name is not included in any Assembly Constituency/
Parliamentary Constituency.</h5>
                                <h5>(iii) I am aware that making the above statement or declaration in relation to this application which is false and which I
know or believe to be false or do not believe to be true, is punishable under Section 31 of Representation of the People
Act,1950 (43 of 1950) with imprisonment for a term which may extend to one year or with fine or with both.</h5>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div> <br />
                        <div class="form-group">
                            <h4><a href="login.php"> SignIn if have an account for voting</h4>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

<?php
$servername = "localhost";
$username= "root";
$password = "";
$db = "votesystem";
$conn = mysqli_connect($servername, $username, $password, $db);



if(isset($_POST['submit'])){
  $FirstName = $_POST['first_name'];
  $LastName = $_POST['last_name'];
  $BirthDate = $_POST['birth_date'];
  $Gender= $_POST['gender'];
  $PhoneNumber = $_POST['phone_number'];
  $MetaMask = $_POST['mm'];
  $voters_id = $_POST['aadhar_card'];
  $Email = $_POST['email'];
  $Password = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $Street1 = $_POST['st1'];
  $Street2 = $_POST['st2'];
  $Town = $_POST['tv'];
  $Pincode = $_POST['pinc'];
  $State = $_POST['state'];
  $City = $_POST['city'];
  $Photo = $_FILES['photo']['name'];
  $AadharCopy = $_FILES['aadhar']['name'];
  $TownVillage = $_POST['tv1'];
  $Ccity = $_POST['city1'];
  $target_path = "../images/";
  $target_path1=$target_path.$Photo;
  $target_path2=$target_path.$AadharCopy;
  move_uploaded_file($_FILES['photo']['tmp_name'],$target_path1);
  move_uploaded_file($_FILES['aadhar']['tmp_name'],$target_path2);

  $sql = "INSERT INTO voters (`firstName`, `lastName`, `BirthDate`, `Gender`, `PhoneNumber`, `MetaMask`, `voters_id`, `Email`, `password`, `Street1`, `Street2`, `Town`, `Pincode`, `State`, `City`, `photo`, `AadharCopy`, `TownVillage`, `Ccity`) VALUES ('$FirstName','$LastName','$BirthDate','$Gender','$PhoneNumber','$MetaMask','$voters_id','$Email','$Password','$Street1','$Street2','$Town','$Pincode','$State','$City','$Photo','$AadharCopy','$TownVillage','$Ccity')";

  if(mysqli_query($conn, $sql)){
    echo "<script>window.location='login.php';</script>";
  }
  
}
mysqli_close($conn);
 ?>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
