<?php
include 'connection.php';

$city = $obj->Query("Select * from city");
if(isset($_POST["submit"]))
{
	$area_name = $_POST["area_name"];
	$city_id = $_POST["city_id"];
	$result = $obj->query("select * from area where area_name='$area_name'");
   	$row = $result->num_rows;

	   if($row == 1)
	    {
	    	echo "<script>alert('Area already Exist...')</script>";
	    }
	    else
		{
			if ($area_name == 0)
			{
				echo "<script>alert('Area can not be in numbers..');</script>";	
			}
			else
			{
				$insert = $obj->Query("INSERT INTO area(area_name,city_id) VALUES('$area_name','$city_id')");
				if($insert)
				{
					echo "<script>alert('Area Inserted Successfully');</script>";
				}
				else
				{
		   			echo "<script>alert('Error in Code');</script>";	
				}
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

	<title>Add Area | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add Area</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Add New Area</label>
											<input type="text" class="form-control" placeholder="Area Name" id="area_name" name="area_name">
										</div>
										<div class="mb-3">
											<label class="form-label">Select City</label>
											<select class="form-control" id="city_id" name="city_id">
											<option value="">---Select City---</option>
											<?php while($comrow = $city->fetch_object())
											{
											?>
											<option value="<?php echo $comrow->city_id; ?>"><?php echo $comrow->city_name; ?></option>
											<?php
											}
											?>
											</select>
										</div>
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Add Area</button>
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