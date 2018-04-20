<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.insert_db.php";

			$insertAbout = new Skills();
		$error= [];
      	if(array_key_exists('add_about', $_POST)){
        	if(empty($_POST['about'])){
          		$error['about'] = "Please enter infomations about you";
        	}
        	if(empty($error)){
          		$input= array_map('trim', $_POST);
          		extract($input);
          	$insertAbout->insertAboutContent($conn, 'about', $about);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add About</h1>
   		<hr>
   		<form id="register"  method="post">
   			<div>
          <?php  $showError = $insertAbout->error($error, 'about'); echo $showError;  ?>
          <textarea cols="20" rows="10" name="about" placeholder="write about you here"></textarea>
   			</div>
   			<input type="submit" name="add_about" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; ?>
