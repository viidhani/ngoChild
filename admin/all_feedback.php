<?php
include 'connection.php';

$result = $obj->Query("SELECT user.fname,user.user_id,feedback.feedback_id,feedback.user_id,feedback.message,feedback.date FROM feedback INNER JOIN user ON feedback.user_id = user.user_id");

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

	<title>View Feedback | Child Adoption</title>

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
									<h5 class="card-title">Feedbacks</h5>
									
								</div>
								<table class="table table-striped">
									<thead>
										<tr class="table-primary">
											<th style="width:20%;">Feedback ID</th>
											<th style="width:20%">User Name</th>
											<th style="width:20%">Message</th>
											<th style="width:20%">Date</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($row = $result->fetch_object())
			{
			?>
										<tr>
											<td><?php echo $row->feedback_id; ?></td>
											<td><?php echo $row->fname; ?></td>
											<td><?php echo $row->message; ?></td>
											<td><?php echo $row->date; ?></td>
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