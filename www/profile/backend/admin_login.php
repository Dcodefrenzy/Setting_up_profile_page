<?php include "includes/dbconf.php"; 
	  include "includes/class.login.php";
	  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css"></link>

</head>
<body>
	<?php 
		$logIn = new LoginAdmin();
		$error = array();
    if(array_key_exists('register', $_POST)){

      if(empty($_POST['email'])){
        	$error['email']="Please input email";
      }
      if(empty($_POST['hash'])){
        	$error['hash']="Please enter password";
      }
      if(empty($error)){
          	$input = array_map('trim', $_POST);
          	extract($input);
          	$logIn->Login($conn, $email, $hash);
          	$response = $logIn->result;
          	if($response[0]){
         $user = $response[1];
         $_SESSION['firstname'] = $user['firstname'];
         $_SESSION['lastname'] = $user['lastname'];
         $_SESSION['username'] = $user['username'];
         header("Location:dashboard.php");

          }	
         }

    }
	 ?>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>

	<div class="wrapper">
		<h1 id="register-label">Admin Login</h1>
		<hr>
		<form id="register"  method ="POST">
			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
		<div>
				<label>password:</label>
				<input type="password" name="hash" placeholder="password">
			</div>

			<input type="submit" name="register" value="login">
		</form>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2018;
		</div>
	</section>
</body>
</html>
