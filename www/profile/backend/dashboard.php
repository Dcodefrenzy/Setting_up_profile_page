<?php 
		include "includes/dbconf.php";
		include "includes/class.login.php";
		include "includes/nav.php"; 

	session_start();
	echo "<p><b>Welcome</b> ".$_SESSION['firstname']." ".$_SESSION['lastname']."</p>";








include "includes/footer.php";
?>