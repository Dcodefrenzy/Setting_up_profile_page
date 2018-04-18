<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>
	<?php 
		 $error = array();
  if(array_key_exists('register', $_POST)){

    if(empty($_POST['fname'])){
      $error ['fname']= "Please fill in your First name";
    }
    if(empty($_POST['lname'])){
      $error ['lname']= "Please fill in your Last name";
    }
    if(empty($_POST['username'])){
      $error ['username']= "Please Input Username";
    }
    if(empty($_POST['email'])){
      $error ['email']= "Please fill in your Email";
    }
    if(doesEmailExist($conn, $_POST['email'])){
      $error ['email']= "Email already exsits";
    }
     if(empty($_POST['phonenumber'])){
      $error ['phonenumber']= "Please Input Phone Number";
    }
    if(empty($_POST['git'])){
      $error ['git']= "Please input git link";
    }
    if(empty($_POST['twitter'])){
      $error ['twitter']= "Please Input twitter link";
    }
    if(empty($_POST['facebook'])){
      $error ['facebook'] = "Please Input facebook account";
    }
    if(empty($_POST['instagram'])){
      $error ['Instagram']= "Please Input instagram link";
    }
    if(empty($_POST['password'])){
      $error ['password']= "Please fill in your Password";
    }
    if(empty($_POST['pword'])){
      $error ['pword']= "Please re-enter your password";
    }
    if($_POST['password'] !== $_POST['pword']){
      $error ['pword']="Please your pass word do not match";
    }
	?>
	
	<div class="wrapper">
		<h1 id="register-label">Register</h1>
		<hr>
		<form id="register"  action ="register.php" method ="POST">
			<div>
				<label>First name:</label>
				<input type="text" name="fname" placeholder="first name">
			</div>
			<div>
				<label>Last name:</label>	
				<input type="text" name="lname" placeholder="last name">
			</div>

			<div>
				<label>Username:</label>	
				<input type="text" name="username" placeholder="username">
			</div>

			<div>
				<label>Email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
			<div>
				<label>Phone Number:</label>	
				<input type="text" name="lname" placeholder="phonenumber">
			</div>			
			
			<div>
				<label>Github:</label>	
				<input type="text" name="git" placeholder="git">
			</div>

			<div>
				<label>Twitter:</label>	
				<input type="text" name="twitter" placeholder="twitter">
			</div>
			<div>
				<label>FaceBook:</label>	
				<input type="text" name="facebook" placeholder="facebook">
			</div>
			<div>
				<label>Instagram:</label>	
				<input type="text" name="instagram" placeholder="instagram">
			</div>
			
			<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>
 
			<div>
				<label>confirm password:</label>	
				<input type="password" name="pword" placeholder="password">
			</div>

			<input type="submit" name="register" value="register">
		</form>

		<h4 class="jumpto">Have an account? <a href="login.php">login</a></h4>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>