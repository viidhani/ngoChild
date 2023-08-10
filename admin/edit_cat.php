<?php
include 'connection.php';
$eid = $_GET["eid"];
$oldcat=$obj->Query("select * from category where cat_id='$eid'");
$oldcatdata = $oldcat->fetch_object();

if(isset($_POST["submit"]))
{
	$cat_name = $_POST["cat_name"];
	$copyresult = $obj->query("select * from category where cat_name='$cat_name' and cat_id!='$eid'");
   	$rowcount = $copyresult->num_rows;
	if($rowcount == 1)
	{
		echo "<script>alert('Category already Exist...')</script>";
	}
	else
	{
	$catupdate = $obj->Query("update category set cat_name='$cat_name' where cat_id='$eid'");
	if($catupdate)
	{
			echo "<script>alert('Category Updated');document.location='view_allcat.php';</script>";
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

	<title>Add Category | Child Adoption</title>

	<link href="css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php include 'common/sidebar.php'; ?>

		<div class="main">
		<?php include 'common/header.php'; ?>
	

			<main class="content">
				<div class="container-fluid p-0">

					<h1 class="h3 mb-3">Update Category</h1>

					<div class="row">
						<div class="col-12 col-xl-6">
							<div class="card">
								<div class="card-body">
									<form method="post">
										<div class="mb-3">
											<label class="form-label">Update Category</label>
											<input type="text" class="form-control" placeholder="Category Name" id="cat_name" name="cat_name" value="<?php echo $oldcatdata->cat_name; ?>">
										</div>
											<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Category</button>
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