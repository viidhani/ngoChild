<?php
include 'connection.php';

$select = $obj->Query("select *from inquiry");

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

	<title>All Inquiry | Child Adoption</title>

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
									<h5 class="card-title">View Inquiry</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:10%;">Inquiry ID</th>
											<th style="width:25%">Name</th>
											<th style="width:25%">Contact</th>
											<th style="width:25%">Message</th>
											<th style="width:25%">Date</th>
											
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $select->fetch_object())
			{
			?>
										<tr>
											<td><?php echo $row->inq_id; ?></td>
											<td><?php echo $row->name; ?></td>
											<td><?php echo $row->contact; ?></td>
											<td><?php echo $row->message; ?></td>
											<td><?php echo $row->date; ?></td>
										</tr>
									<?php } ?>
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