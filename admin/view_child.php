<?php
include 'connection.php';

$result = $obj->Query("SELECT * from child");
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

	<title>Manage Child | Child Adoption</title>

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
									<h5 class="card-title">Manage Child</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:8%;">Child ID</th>
											<th style="width:10%">Child Name</th>
											<th style="width:7%">Height</th>									
											<th style="width:7%">Weight</th>									
											<th style="width:10%">Color</th>									
											<th style="width:10%">Gender</th>									
											<th style="width:20%">About</th>
											<th style="width:10%">Gallery</th>
											<th style="width:20%">Date</th>
											<th style="width:25%">Edit/Delete</th>								
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $result->fetch_object())
										{
										?>
										<tr>
											<td><?php echo $row->child_id; ?></td>
											<td><?php echo $row->name; ?></td>
											<td><?php echo $row->height; ?></td>
											<td><?php echo $row->weight; ?></td>
											<td><?php echo $row->color; ?></td>
											<td><?php echo $row->gender; ?></td>
											<td><?php echo $row->about; ?></td>
											<td><img src="UploadImage/<?php echo $row->gallery; ?>" height="100" width="100"></image></td>
											<td><?php echo $row->date; ?></td>
											<td class="table-action">
												<a href="edit_child.php?eid=<?php echo $row->child_id; ?>"><i class="align-middle" data-feather="edit-2"></i></a>
												<a href="delete_child.php?did=<?php echo $row->child_id; ?>"><i class="align-middle" data-feather="trash"></i></a>
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