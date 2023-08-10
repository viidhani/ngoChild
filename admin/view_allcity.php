<?php
include 'connection.php';

$select = $obj->Query("select *from city");

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

	<title>All City | Child Adoption</title>

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
									<h5 class="card-title">Manage City</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:10%;">City ID</th>
											<th style="width:30%">City Name</th>
											<th style="width:20%">Edit/Delete</th>	
											
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $select->fetch_object())
			{
			?>
										<tr>
											<td><?php echo $row->city_id; ?></td>
											<td><?php echo $row->city_name; ?></td>
											<td class="table-action">
												<a href="edit_city.php?eid=<?php echo $row->city_id; ?>"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="delete_city.php?did=<?php echo $row->city_id; ?>"><i class="align-middle" data-feather="trash"></i></a>
											</td>
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