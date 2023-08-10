<?php
include 'connection.php';
$eid = $_GET["eid"];
$allarea = $obj->Query("select * from area where area_id='$eid'");
$rowarea = $allarea->fetch_object();
$allcity = $obj->Query("select * from city");
if(isset($_POST["submit"]))
{
	$area_name = $_POST["area_name"];
	$city_id = $_POST["city_id"];
	$copyresult = $obj->query("select * from area where area_name='$area_name' and area_id!='$eid'");
	$rowcount = $copyresult->num_rows;
	if($rowcount == 1)
	{
		echo "<script>alert('Area already Exist...')</script>";
	}
	else
	{
		$areaupdate = $obj->Query("Update area set area_name='$area_name',city_id='$city_id' where area_id='$eid'");
		if($areaupdate)
		{
			echo "<script>alert('Area Updated');document.location='view_allarea.php';</script>";
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
	<meta name="author" content="KhilonaRental">
	<meta name="keywords" content="khilonarental, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Update Area | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
			<?php include 'common/header.php'; ?>


			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Update Area</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Update Area</label>
											<input type="text" class="form-control" placeholder="Area Name" id="area_name" name="area_name" value="<?php echo $rowarea->area_name; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Update City</label>
											<select class="form-control" id="city_id" name="city_id">
												<option value="">---Select Option---</option>
												<?php while($citydata = $allcity->fetch_object()) 
												{
													?>
													<option value="<?php echo $citydata->city_id; ?>" <?php if($citydata->city_id==$rowarea->city_id) echo 'selected'; ?>><?php echo $citydata->city_name; ?>
													<?php
												}
											?></option></select>
										</div>
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Area</button>
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