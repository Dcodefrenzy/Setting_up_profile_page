<?php include "includes/dbconf.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="styles/styles.css">
</head>
<body>
	<?php 
		$error = array();
    if(array_key_exists('register', $_POST)){

      if(empty($_POST['email'])){
        	$error['email']="Please input email";
      }
      if(empty($_POST['password'])){
        	$error['password']="Please enter password";
      }
      if(empty($error)){
          	$input = array_map('trim', $_POST);

	 ?>
	<section>
		<div class="mast">
			<h1>T<span>SSB</span></h1>
		</div>
	</section>

	<div class="wrapper">
		<h1 id="register-label">Admin Login</h1>
		<hr>
		<form id="register"  action ="login.php" method ="POST">
			<div>
				<label>email:</label>
				<input type="text" name="email" placeholder="email">
			</div>
		<div>
				<label>password:</label>
				<input type="password" name="password" placeholder="password">
			</div>

			<input type="submit" name="register" value="login">
		</form>

		<h4 class="jumpto">Don't have an account? <a href="admin_register.php">register</a></h4>
	</div>

	<section class="foot">
		<div>
			<p>&copy; 2016;
		</div>
	</section>
</body>
</html>
