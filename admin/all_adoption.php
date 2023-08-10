<?php
include 'connection.php';

$result = $obj->Query("SELECT * from adoptionrequest");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Adoption Request | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

				<div class="card">
								<div class="card-header">
									<h5 class="card-title">Adoption Request</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:5%">Request ID</th>
											<th style="width:5%">User Id</th>									
											<th style="width:5%">Child Id</th>									
											<th style="width:5%">City Id</th>									
											<th style="width:15%">Occuoation</th>								
											<th style="width:15%">Habits</th>								
											<th style="width:10%">Family Members</th>
											<th style="width:10%">Adoption Reason</th>
											<th style="width:10%">Description</th>
											<th style="width:10%">Date</th>	
											<th style="width:10%">Status</th>	

											<th style="width:10%">Change Status</th>							
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $result->fetch_object())
										{
										?>
										<tr>
											<td><?php echo $row->request_id; ?></td>
											<td><?php echo $row->user_id; ?></td>
											<td><?php echo $row->child_id; ?></td>
											<td><?php echo $row->city_id; ?></td>
											<td><?php echo $row->occupation; ?></td>
											<td><?php echo $row->habits; ?></td>

											<td><?php echo $row->familymem; ?></td>
											<td><?php echo $row->why; ?></td>
											<td><?php echo $row->description; ?></td>
											<td><?php echo $row->date; ?></td>
											<td><?php echo $row->status; ?></td>
											<td class="table-action">
											<a href="update_adoption.php?aid=<?php echo $row->request_id; ?>">Change Status</a>
											</td>	
											
										</tr>
										<?php 
										} 
										?>
									</tbody>
								</table>
							</div>		</div>
									
			</main>

				<?php include 'common/footer.php'; ?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>