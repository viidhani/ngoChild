<?php
include 'connection.php';
$eid = $_GET["eid"];
$oldcity=$obj->Query("select * from city where city_id='$eid'");
$oldcitydata = $oldcity->fetch_object();

if(isset($_POST["submit"]))
{
	$city_name = $_POST["city_name"];
	$copyresult = $obj->query("select * from city where city_name='$city_name' and city_id!='$eid'");
   	$rowcount = $copyresult->num_rows;
	if($rowcount == 1)
	{
		echo "<script>alert('City already Exist...')</script>";
	}
	else
	{
	$cityupdate = $obj->Query("update city set city_name='$city_name' where city_id='$eid'");
	if($cityupdate)
	{
			echo "<script>alert('City Updated');document.location='view_allcity.php';</script>";
	}
	else
	{
		echo "<script>alert('Error in Code')</script>";
	
	}
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
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Update City | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Update City</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Update City</label>
											<input type="text" class="form-control" placeholder="City Name" id="city_name" name="city_name" value="<?php echo $oldcitydata->city_name; ?>">
										</div>
											<button type="submit" class="btn btn-primary" id="submit" name="submit">Update City</button>
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