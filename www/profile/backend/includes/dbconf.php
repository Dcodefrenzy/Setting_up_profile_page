<?php 

<?php
//connecting to the db
define("DBNAME", "profile");
define("DBUSER", "root");
define("DBPASS", "4getmen0t");
		try{
			$conn =new PDO("mysql:host=localhost;dbname=".DBNAME, DBUSER, DBPASS);
			$conn->setAttribute(PDO::ERRMODE_SILENT, PDO::ATTR_ERRMODE);

		}catch(PDOException $e){
			echo  $e->getMessage();
	}
 ?>

 



