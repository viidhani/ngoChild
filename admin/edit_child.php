<?php
include 'connection.php';
$eid = $_GET["eid"];
$oldchild=$obj->Query("select * from child where child_id='$eid'");
$oldchilddata = $oldchild->fetch_object();


if(isset($_POST["submit"]))
{
	$age = $_POST["age"];
	$height = $_POST["height"];
	$name = $_POST["name"];
	$weight = $_POST["weight"];
	$color = $_POST["color"];
	$gender = $_POST["gender"];
	$about = $_POST["about"];
	$date = $_POST["date"];
	
  	if(!isset($_FILES['gallery']) || $_FILES['gallery']['error'] == UPLOAD_ERR_NO_FILE)
	{
		$filename = $oldchilddata->gallery;
       	$update = $obj->Query("UPDATE child SET age='$age',name='$name',height='$height',weight='$weight',color='$color',gender='$gender',about='$about',gallery='$filename',date='$date' WHERE child_id='$eid'");
			if($update)
			{
				header('location:view_child.php');
			}
			else
			{
				echo "<script>alert('Error in Code');</script>";
			}

  	} 
 	else 
  	{
	$filename = $_FILES["gallery"]["name"];
	$gallery = explode(".", $filename);
	$ext = strtolower(end($gallery));
	$tmp = $_FILES["gallery"]["tmp_name"];
	$path = "UploadImage/$filename";


		if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'gif')
		{
		move_uploaded_file($tmp, $path);
		$update = $obj->Query("UPDATE child SET age='$age',name='$name',height='$height',weight='$weight',color='$color',gender='$gender',about='$about',gallery='$filename',date='$date' WHERE child_id='$eid'");
		if($update)
				{
					echo "<script>alert('Child Updated Successfully');</script>";
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
											<input type="text" class="form-control" placeholder="Name" id="name" name="name" value="<?php echo $oldchilddata->name; ?>">
										</div>
										
										<div class="mb-3">
											<label class="form-label">Age</label>
											<input type="text" id="age" name="age" class="form-control" placeholder="Age" value="<?php echo $oldchilddata->age; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Height</label>
											<input type="text" id="height" name="height" class="form-control" placeholder="Height" value="<?php echo $oldchilddata->height; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Weight</label>
											<input type="text" id="weight" name="weight" class="form-control" placeholder="Weight" value="<?php echo $oldchilddata->weight; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Color</label>
											<input type="text" id="color" name="color" class="form-control" placeholder="Color" value="<?php echo $oldchilddata->color; ?>">
										</div>
										<div class="row">
									<label class="col-form-label col-sm-2  pt-sm-0">Gender</label>
									<div class="col-sm-10">
										<label class="form-check">
											<input name="gender" type="radio" id="girl" value="girl"  class="form-check-input" <?php if($oldchilddata->gender=="girl") echo 'checked'; ?>>
											<span class="form-check-label">Girl</span>
										</label>
										<label class="form-check">
											<input name="gender" type="radio" id="boy" value="boy" class="form-check-input" <?php if($oldchilddata->gender=="boy") echo 'checked'; ?>>
											<span class="form-check-label">Boy</span>
										</label>
									</div>


									<div class="mb-3">
										<label class="form-label">About</label>
										<textarea class="form-control" placeholder="About Child" rows="3" id="about" name="about"><?php echo $oldchilddata->about; ?></textarea>
									</div>
									<div class="mb-3">
									<label class="form-label w-100">Child Image</label>
									<input type="file" id="gallery" name="gallery">
									<small class="form-text text-muted"><?php echo $oldchilddata->gallery; ?></small>
								</div>
								<div class="mb-3">
										<label class="form-label">Date</label>
										<input type="date" class="form-control"  name="date" id="date"  value="<?php echo $oldchilddata->date; ?>">
									</div>
								




									<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Child</button>

								
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