<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.oop.php";

			$insertExperience = new Skills();
		$error= [];
      	if(array_key_exists('add_skill', $_POST)){
        	if(empty($_POST['position'])){
          		$error['position'] = "Please input your Position";
        	}
        	if(empty($_POST['organization'])){
          		$error['organization'] = "Please input organization Name";
        	}
          if(empty($_POST['start_year'])){
              $error['start_year'] = "Please input the year you started";
          }
          if(empty($_POST['end_year'])){
              $error['end_year'] = "Please input the year you ended";
          }
        	if(empty($error)){
          
          		
          	$insertExperience->insertExperience($conn, 'work_experienc', $_POST);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add Education</h1>
   		<hr>
   		<form id="register"  method="post">
   			<div>
          <?php  $showError =$insertExperience->error($error, 'position'); echo $showError;  ?>
   				<label>Position:</label>
   				<input type="text" name="position" placeholder="position">
   			</div>

   		   <div>
            <?php  $showError = $insertExperience->error($error, 'organization'); echo $showError;  ?>
   				<label>organization: </label>
   				<input type="text" name="organization" placeholder="organization">
   			</div>

        <div>
          <?php  $showError = $insertExperience->error($error, 'start_date'); echo $showError;  ?>
          <label>Start Year:</label>
          <input type="text" name="start_year" placeholder="start year">
        </div>
        <div>
          <?php  $showError = $insertExperience->error($error, 'end_year'); echo $showError;  ?>
          <label>End Year:</label>
          <input type="text" name="end_year" placeholder="end year">
        </div>

   			<input type="submit" name="add_skill" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; 
?>