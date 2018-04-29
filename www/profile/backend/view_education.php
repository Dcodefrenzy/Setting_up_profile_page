<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.view.php";

	$view_education = new view;

	

	$view_education -> selectFromDb($conn, 'education');
	 $display = $view_education->education();


	?>
			
			<table id="tab">
				<thead>
					<tr>
						
						<th>School</th>
						<th>degree</th>
						<th>start year</th>
						<th>end year</th>
						<th>edit</th>
						<th>delete</th>
					</tr>
				</thead>
				<?php echo $display; ?>
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

