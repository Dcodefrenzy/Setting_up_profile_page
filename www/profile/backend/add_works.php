<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.oop.php";

			$insertworks = new Skills();

      define("MAX_FILE_SIZE", 2097152);
      $ext = ['image/jpeg', 'image/jpg', 'image/png'];
		  $error= [];
      	if(array_key_exists('add_skill', $_POST)){
        	if(empty($_POST['name'])){
          		$error['name'] = "Please input name of project";
        	}
          if(empty($_POST['link'])){
              $error['link'] = "Please input the link to your project";
          }
          if(empty($_FILES['img']['name'])) {
          $error['img'] = "Please provide an image";
          }

          if($_FILES['img']['size'] > MAX_FILE_SIZE) {
          $error['img'] = "File size exceeds maximum: ".MAX_FILE_SIZE;
          }
          if(!in_array($_FILES['img']['type'], $ext)) {
          $error['img'] = "File format not supported";
          }
          
        	if(empty($error)){#
             $ran =rand(0000000000, 999999999);
           $strip_name = str_replace(' ', '_', $_FILES['img']['name']);
           $filename =$ran.$strip_name;
           $destination = 'uploads/'.$filename;
          if(!move_uploaded_file ($_FILES['img']['tmp_name'], $destination)){
                echo "not successful";                
              }else{
                $location['img_path'] = $destination;

              }
             $input['name'] =  $_POST['name'];
              $input['link'] =  $_POST['link'];
              $input ['img_path']= $location['img_path'];
              $input ['add_skill']= $_POST['add_skill'];         		
          	$insertworks->insertExperience($conn, 'add_works', $input);
        	}
      	}

 ?>

  <div class="wrapper">
   		<h1 id="register-label">Add Work</h1>
   		<hr>
   		<form id="register"  method="post" enctype="multipart/form-data">
   			<div>
          <?php  $showError =$insertworks->error($error, 'name'); echo $showError;  ?>
   				<label>Position:</label>
   				<input type="text" name="name" placeholder="name">
   			</div>

   		   <div>
            <?php  $showError = $insertworks->error($error, 'link'); echo $showError;  ?>
   				<label>organization: </label>
   				<input type="text" name="link" placeholder="link">
   			</div>

        <div>
          <?php  $showError = $insertworks->error($error, 'img'); echo $showError;  ?>
          <label>Start Year:</label>
          <input type="file" name="img" placeholder="img">
        </div>

   			<input type="submit" name="add_skill" value="add">
   		</form>

   	</div>
  	</div>
<?php include "includes/footer.php"; ?>