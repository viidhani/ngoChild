<?php
include 'connection.php';
$result = $obj->Query("SELECT * from donation_user");
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

	<title>View Donantions | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content ">
				<div class="container-fluid p-0">

				<div class="card">
								<div class="card-header">
									<h5 class="card-title">Donations</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:10%;">Donation ID</th>
											<th style="width:10%">User Name</th>
											<th style="width:10%">Category Name</th>
											<th style="width:20%">Subject</th>
											<th style="width:20%">Description</th>
											<th style="width:10%">Status</th>
											<th style="width:10%">Date</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $result->fetch_object())
			{
			?>
										<tr>
											<td><?php echo $row->donation_id; ?></td>
											<td><?php echo $row->user_id; ?></td>
											<td><?php echo $row->cat_id; ?></td>									<td><?php echo $row->subject; ?></td>							
											<td><?php echo $row->description; ?></td>				
											<td><?php echo $row->status; ?></td>											
											<td><?php echo $row->date; ?></td>
											</td>
										</tr>
									<?php } ?>
									</tbody>
								</table>
							</div>
				</div>
									
			</main>

				<?php include 'common/footer.php'; ?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>