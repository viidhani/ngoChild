<?php

session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$userid = $_SESSION["user_id"];

$donationid = $_GET['eid'];

$donation = $obj->Query("select * from donation_user where donation_id='$donationid'");
$row = $donation->fetch_object();
$donor_id = $row->user_id;

if(isset($_POST["submit"]))
{
	$status  = $_POST['status'];
	$remarks = $_POST['remarks'];

	$datetime = date('Y-m-d h:i:s a');
	
	$update = $obj->Query("update donation_user set status='$status',remarks='$remarks' where donation_id='$donationid'");

	
	$obj->query("INSERT INTO `accept_donation`(`donation_id`, `volunteer_id`, `donor_id`, `accept_datetime`, `accept_remarks`) VALUES ('$donationid','$userid','$donor_id','$datetime','$remarks')");

    if($update)
      {
        echo "<script>alert('Updated Successfully');document.location='feedback.php';</script>";
      }
      else
      {

        echo "<script>alert('Error In Code');document.location='update_accept.php';</script>";
      }
	
}
?>


<!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Child Adoption | childadoption.com</title>
        <link rel="shortcut icon" href="assets/images/fav.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="assets/images/fav.jpg">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/all.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/plugins/slider/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/plugins/slider/css/owl.theme.default.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    </head>

    <body>

        <?php include 'common/header.php'; ?> 
        <!--  ************************* Page Title Starts Here ************************** -->
    <div class="page-nav no-margin row">
        <div class="container">
            <div class="row">
                <h2>Update Donation Status</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i>Status</li>
                </ul>
            </div>
        </div>
    </div>
       
      <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 >Change Status</h2> <br>
  								<form method="post">
										<div class="mb-3">
											<label class="form-label">Subject of Donation</label>
								            <input type="text" class="form-control" id="subject" name="subject" value="<?php echo $row->subject; ?>">
										</div>
										<div class="mb-3">
											<label class="form-label">Donation Status</label>
											<select class="form-control" id="status" name="status">
												<option value="">---Update Status---</option>
												<option value="Accept">Accept</option>
												<option value="Reject">Reject</option>
											</select>
										</div>
										<div class="mb-3">
											<label class="form-label">Remarks</label>
								            
                                    <textarea id="remarks" name="remarks" rows="5" placeholder="Remarks Here" class="form-control input-sm"></textarea>
										</div>
										
										<button type="submit" class="btn btn-primary" id="submit" name="submit">Update Donation Status</button>
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