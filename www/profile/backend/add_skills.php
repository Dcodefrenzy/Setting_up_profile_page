<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.insert_db.php";

			$insertSkill = new Skills();
		$error= [];
      	if(array_key_exists('add_skill', $_POST)){
        	if(empty($_POST['skill_name'])){
          		$error['skill_name'] = "Please input a Skill name";
        	}
        	if(empty($_POST['skill_value'])){
          		$error['skill_value'] = "Please input a Skill value";
        	}
        	if(empty($error)){
          		$input= array_map('trim', $_POST);
          		extract($input);
          	$insertSkill->insertContent($conn, 'expertise', $skill_name, $skill_value);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add Skills</h1>
   		<hr>
   		<form id="register"  method="post">
   			<div>
             	<?php  $showError =$insertSkill->error($error, 'skill_name'); echo $showError;  ?>
   				<label>Category Name:</label>
   				<input type="text" name="skill_name" placeholder="skill name">
   			</div>

   		   	<div>
             	<?php  $showError = $insertSkill->error($error, 'skill_value'); echo $showError;  ?>
   				<label>Category Name:</label>
   				<input type="text" name="skill_value" placeholder="skill rate">
   			</div>
   			<input type="submit" name="add_skill" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; ?>
