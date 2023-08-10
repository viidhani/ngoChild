<?php
include 'connection.php';

$bdate = $_POST["date"];
$today = date("Y-m-d");
$diff  = date_diff(date_create($bdate), date_create($today));

if(isset($_POST["submit"]))
{
	$age = $diff->format('%y');
	$height = $_POST["height"];
	$name = $_POST["name"];
	$weight = $_POST["weight"];
	$color = $_POST["color"];
	$gender = $_POST["gender"];
	$about = $_POST["about"];
	$date = $_POST["date"];
	$result = $obj->query("select * from child where name='$name'");
   	$row = $result->num_rows;
   	if($row == 1)
	{
	   echo "<script>alert('Child Information already Exist...')</script>";
	}
	  
   	$filename = $_FILES["gallery"]["name"];
	$gallery = explode(".", $filename);
	$ext = strtolower(end($gallery));
	$tmp = $_FILES["gallery"]["tmp_name"];
	$path = "UploadImage/$filename";

	if($weight > 0 && $height > 0)
	{
		if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif')
		{
			move_uploaded_file($tmp, $path);
			$insert = $obj->Query("INSERT INTO `child`(`age`, `name`, `height`, `weight`, `color`, `gender`, `about`, `gallery`, `date`) VALUES ('$age','$name','$height','$weight','$color','$gender','$about','$filename','$date')");
			if($insert)
			{
				echo "<script>alert('Child Inserted Successfully');</script>";
			}
			else
			{
		   		echo "<script>alert('Error in Code');</script>";	
			}
		}
		else
		{
			echo "<script>alert('Invalid File Type..')</script>";
		}
	}
	else
	{
		echo "<script>alert('Invalid Height or Weight..');</script>";
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

	<title>Add Child | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Add Child Details</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post" enctype="multipart/form-data">

										<div class="mb-3">
											<label class="form-label">Child Name</label>
											<input type="text" class="form-control" placeholder="Name" id="name" name="name">
										</div>
										
										<div class="mb-3">
											<label class="form-label">Height</label>
											<input type="text" id="height" name="height" class="form-control" placeholder="Height">
										</div>
										<div class="mb-3">
											<label class="form-label">Weight</label>
											<input type="text" id="weight" name="weight" class="form-control" placeholder="Weight">
										</div>
										<div class="mb-3">
											<label class="form-label">Color</label>
											<input type="text" id="color" name="color" class="form-control" placeholder="Color">
										</div>
										<div class="row">
									<label class="col-form-label col-sm-2  pt-sm-0">Gender</label>
									<div class="col-sm-10">
										<label class="form-check">
											<input name="gender" type="radio" id="girl" value="girl"  class="form-check-input" checked>
											<span class="form-check-label">Girl</span>
										</label>
										<label class="form-check">
											<input name="gender" type="radio" id="boy" value="boy" class="form-check-input">
											<span class="form-check-label">Boy</span>
										</label>
									</div>


									<div class="mb-3">
										<label class="form-label">About</label>
										<textarea class="form-control" placeholder="About Child" rows="3" id="about" name="about"></textarea>
									</div>
									<div class="mb-3">
									<label class="form-label w-100">Child Image</label>
									<input type="file" id="gallery" name="gallery">
									<small class="form-text text-muted">Child Current Image.</small>
								</div>
								<div class="mb-3">
										<label class="form-label">Date</label>
										<input type="date" class="form-control"  name="date" id="date" placeholder="About Child" >
									</div>
								




									<button type="submit" class="btn btn-primary" id="submit" name="submit">Add Child</button>

								
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