<?php 
	include "includes/dbconf.php";
	include "includes/nav.php";
	include "includes/class.view.php";

	$view_education = new view;

	

	$view_education -> selectFromDb($conn, 'work_experienc');
	 $display = $view_education->skills();


	?>
			
			<table id="tab">
				<thead>
					<tr>
						
						<th>Skill</th>
						<th>Skill Rate</th>
						<th>Date created</th>
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

