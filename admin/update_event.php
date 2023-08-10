<?php

include 'connection.php';
$id = $_GET['eid'];
$event = $obj->Query("select * from event where event_id='$id'");
$row = $event->fetch_object();

if(isset($_POST["submit"]))
{
	$reason = $_POST['reason'];
	$status  = $_POST['status'];
	   $update = $obj->Query("update event set status='$status',reason='$reason' where event_id='$id'");
		if($update)
		{
		    echo "<script>alert('Event Updated Successfully');document.location='all_events.php';</script>";
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
					<h1 class="h3 mb-3">Change Event Status</h1>
					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Change Event Status</label>
								            <input type="text" class="form-control" id="event_title" name="event_title" value="<?php echo $row->event_title; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Event Status</label>
											<select class="form-control" id="status" name="status">
												<option value="">---Update Event---</option>
												<option value="Accept">Accept</option>
												<option value="Reject">Reject</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Reason</label>
								            <input type="text" class="form-control" placeholder="Reason" id="reason" name="reason">
										</div>
										
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Event Status</button>
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