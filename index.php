<?php
include "curl.php";
$json = get_web_page("http://igovphil.github.io/java-exam-01/uacs-agency.json");
$data = json_decode($json);
?>

<html>
<head>
	<title>Test Crud</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<h2>Unified Accounts Code Structure</h2>
			<div class="col-lg-12">
				<div class="table-responsive">
					<table class="table table-bordered table-striped">
						<thead>
							<th>UACS</th>
							<th>DEPARTMENT</th>
							<th>AGENCY</th>
						</thead>
						
						<tbody>
							<?php foreach($data as $row) { ?>
								<tr>
								<td><?php echo $row->uacs; ?></td>
								<td><?php echo $row->department; ?></td>
								<td><?php echo $row->agency; ?></td>
							</tr>
							<?php } ?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>