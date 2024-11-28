<div class="row" style="border:1px solid gray;border-radius:10px;padding:20px 20px 20px 20px;">
		<div class="row" align="center">
			<h4>Employee Details</h4>
		</div>
		<div class="row">
			
			<table class="table table-bordered">
			<thead style="color: red;">
				<th>Fullname</th>
				<th>Phone1</th>
				<th>Phone2</th>
				<th>dob</th>
				<th>Hired Date</th>
				<th>Marital</th>
				<th>Nationality</th>
				<th>Address</th>
				<th>Email</th>
				<th>Gender</th>
			</thead>
			
			
			<?php
			$file = 'employee.csv';

			if (($handle = fopen($file, 'r')) !== false) {
				
				
				$header = fgetcsv($handle); // Get the header row
				if ($header) {
					echo '<thead><tr>';
					foreach ($header as $column) {
						echo "<th>" . htmlspecialchars($column) . "</th>";
					}
					echo '</tr></thead>';
				}

				echo '<tbody>';
				while (($row = fgetcsv($handle)) !== false) {
					echo '<tr>';
					foreach ($row as $column) {
						echo "<td>" . htmlspecialchars($column) . "</td>";
					}
					echo '</tr>';
				}
				echo '</tbody>';

				echo '</table>'; 
				
				fclose($handle);
			} else {
				echo "Unable to open the CSV file.";
			}
			?>
			
		</div>
</div>