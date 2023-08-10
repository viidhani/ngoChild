<?php
session_start();
include 'connection.php';
$id = $_SESSION["admin_id"];
$result1 = $obj->Query("select * from admin where admin_id='$id'");
$row1 = $result1->fetch_object();

if(isset($_POST['submit']))
{
	$oldp = $_POST["oldp"];
	$newp = $_POST["newp"];
	$cnewp = $_POST["cnewp"];

	$result = $obj->Query("select * from admin where admin_id='$id' and password='$oldp'");
	$rowcount = $result->num_rows;

    if($rowcount==1)
	{
		if($newp==$cnewp)
		{
			$update=$obj->Query("update admin set password='$newp' where admin_id='$id'");
			if($update)
			{
				echo "<script>alert('Password Updated Successfully');document.location='index.php';</script>";
			}
			else
			{

				echo "<script>alert('Error In Code');document.location='index.php';</script>";
			}
		}
		else
		{
			echo "<script>alert('Password Miscmatch')</script>";
		
		}
	}
	else
	{
		echo "Old Password Not Matched";
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

	<title>Change Password | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Change Password</h1>

					<div class="row">
						<div class="col-12 col-xl-12">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Old Password</label>
											<input type="password" class="form-control" placeholder="Old Password" name="oldp" id="oldp">
										</div>

										<div class="mb-3">
											<label class="form-label">New Password</label>
											<input type="password" class="form-control" placeholder="New Password" name="newp" id="newp">
										</div>

										<div class="mb-3">
											<label class="form-label">Confirm Password</label>
											<input type="password" class="form-control" placeholder="Confirm Password" name="cnewp" id="cnewp">	
										</div>					
										<input name="submit" id="submit" class="btn btn-primary" type="submit" value="Change Password">		
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