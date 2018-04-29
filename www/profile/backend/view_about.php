<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.view.php";

	$fetch = new view();
	//$display_about = $fetch->fetch_about();
	$fetch->selectFromDb($conn, 'about');
	$display_about = $fetch->about();			
	?>
			
			<table id="tab">
				<thead>
					<tr>
						
						<th>About</th>
						<th>date created</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><?php echo $display_about[1] ?></td>
						<td><?php echo  $display_about[2] ?></td>
						<td><?php echo '<a href= "edit_about.php?id='.$display_about[0].'">edit</a>' ?></td>
						<td><?php echo '<a href= "delete_about.php?id='.$display_about[0].'">delete</a>' ?></td>
					</tr>
          		</tbody>
			</table>
		</div>

		<div class="paginated">
			<a href="#">1</a>
			<a href="#">2</a>
			<span>3</span>
			<a href="#">2</a>
		</div>
	</div>

	<?php
	include "includes/footer.php";
	?>

