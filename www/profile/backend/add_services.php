<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.insert_db.php";

			$insertServiceContent = new Skills();
		$error= [];
      	if(array_key_exists('add_about', $_POST)){
          if(empty($_POST['service'])){
            $error['service'] = "please Input your service";
          }

        	if(empty($_POST['about'])){
          		$error['about'] = "Please enter infomations about your service";
        	}

        	if(empty($error)){
          		$input= array_map('trim', $_POST);
          		extract($input);
          	$insertServiceContent->insertServiceContent($conn, 'services', $about, $service);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add Service</h1>
   		<hr>
   		<form id="register"  method="post">

       <div>
          <?php  $showError =$insertServiceContent->error($error, 'service'); echo $showError;  ?>
          <label>Service:</label>
          <input type="text" name="service" placeholder="service">
        </div>

   			<div>
          <?php  $showError = $insertServiceContent->error($error, 'about'); echo $showError;  ?>
          <label>Service Details</label>
          <textarea cols="20" rows="10" name="about" placeholder="write about your service here"></textarea>
   			</div>
   			<input type="submit" name="add_about" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; ?>
