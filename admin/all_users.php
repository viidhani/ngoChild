<?php
include 'connection.php';

$result = $obj->Query("SELECT * from user where role_id='2'");

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

	<title>View Users | Child Adoption</title>

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
									<h5 class="card-title">Users</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:10%;">User ID</th>
											<th style="width:20%;">First Name</th>
											<th style="width:20%;">Last Name</th>
											<th style="width:20%;">Date of Birth</th>
											<th style="width:20%;">Gender</th>
											<th style="width:20%;">Email</th>
											<th style="width:20%;">Contact</th>
											<th style="width:20%;">Address</th>
											<th style="width:20%;">Password</th>
											<th style="width:20%;">Registration Date</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $result->fetch_object()) 										 
			{
			?>
										<tr>
											<td><?php echo $row->user_id; ?></td>
											<td><?php echo $row->fname; ?></td>
											<td><?php echo $row->lname; ?></td>
											<td><?php echo $row->dob; ?></td>
											<td><?php echo $row->gender; ?></td>
											<td><?php echo $row->email; ?></td>
											<td><?php echo $row->contact; ?></td>
											<td><?php echo $row->address; ?></td>

											<td><?php echo $row->password; ?></td>
											<td><?php echo $row->reg_date; ?></td>
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