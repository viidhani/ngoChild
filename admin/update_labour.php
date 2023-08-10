<?php

include 'connection.php';
$id = $_GET['lid'];
$event = $obj->Query("select * from all_labour where labourchild_id='$id'");
$row = $event->fetch_object();

if(isset($_POST["submit"]))
{
	$status  = $_POST['status'];
	   $update = $obj->Query("update all_labour set status='$status' where labourchild_id='$id'");
		if($update)
		{
		    echo "<script>alert('Labour status Updated Successfully');document.location='all_labour.php';</script>";
		}
		else
		{
		   	echo "<script>alert('Error in Code');</script>";	
		}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="helpinghands">
	<meta name="keywords" content="helpinghands, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Update Event | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	
			<main class="content">
				<div class="container-fluid p-0">
					<h1 class="h3 mb-3">Change Labour Status</h1>
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Change Labour Status</label>
								            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $row->subject; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Labour Status</label>
											<select class="form-control" id="status" name="status">
												<option value="">---Update Labour---</option>
												<option value="Successed">Successed</option>
												<option value="Failed">Failed</option>
											</select>
										</div>
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Labour Status</button>
									</form>
								</div>
							</div>
						</div>
									
			</main>

				<?php include 'common/footer.php'; ?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>