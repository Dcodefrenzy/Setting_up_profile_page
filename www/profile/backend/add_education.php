<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.insert_db.php";

			$insertEducation = new Skills();
		$error= [];
      	if(array_key_exists('add_skill', $_POST)){
        	if(empty($_POST['school'])){
          		$error['school'] = "Please input a School name";
        	}
        	if(empty($_POST['degree'])){
          		$error['degree'] = "Please input a degree";
        	}
          if(empty($_POST['start_year'])){
              $error['start_year'] = "Please input the year you started";
          }
          if(empty($_POST['end_year'])){
              $error['end_year'] = "Please input the year you ended";
          }
        	if(empty($error)){
          		$input= array_map('trim', $_POST);
          		extract($input);
          	$insertEducation->insertEducationContent($conn, 'education', $school, $degree, $start_year, $end_year);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add Education</h1>
   		<hr>
   		<form id="register"  method="post">
   			<div>
          <?php  $showError =$insertEducation->error($error, 'school'); echo $showError;  ?>
   				<label>School Name:</label>
   				<input type="text" name="school" placeholder="school">
   			</div>

   		   <div>
            <?php  $showError = $insertEducation->error($error, 'degree'); echo $showError;  ?>
   				<label>Degree Type:</label>
   				<input type="text" name="degree" placeholder="degree">
   			</div>

        <div>
          <?php  $showError = $insertEducation->error($error, 'start_date'); echo $showError;  ?>
          <label>Start Year:</label>
          <input type="text" name="start_year" placeholder="start year">
        </div>
        <div>
          <?php  $showError = $insertEducation->error($error, 'end_year'); echo $showError;  ?>
          <label>End Year:</label>
          <input type="text" name="end_year" placeholder="end year">
        </div>

   			<input type="submit" name="add_skill" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; ?>
