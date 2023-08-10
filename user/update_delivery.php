<?php
session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$id = $_SESSION["user_id"];

$donationid = $_GET['eid'];



$userid = $_SESSION["user_id"];

$donationid = $_GET['eid'];

$donation = $obj->Query("select * from donation_user where donation_id='$donationid'");
$row = $donation->fetch_object();
$donor_id = $row->user_id;

if(isset($_POST["submit"]))
{
    $remarks = $_POST['remarks'];

    $datetime = date('Y-m-d h:i:s a');
    
    $update = $obj->Query("update donation_user set status='Delivered',remarks='$remarks' where donation_id='$donationid'");

    
        $obj->query("INSERT INTO `accept_donation`(`donation_id`, `volunteer_id`, `donor_id`, `delivery_datetime`, `delivery_remarks`) VALUES ('$donationid','$userid','$donor_id','$datetime','$remarks')");

    if($update)
      {
        echo "<script>alert('Updated Successfully');document.location='feedback.php';</script>";
      }
      else
      {

        echo "<script>alert('Error In Code');document.location='update_delivery.php';</script>";
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
                    <h2>Delivery Donation sDetails</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Delivery Donations</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->

                                       

        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-7">
                        <form method="post"> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Donation ID</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <input type="text"  id="donation_id" name="donation_id" value="<?php echo $row->donation_id; ?>" disabled class="form-control input-sm">
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>User ID</label><span>:</span></div>
                                <div class="col-sm-8">
                                 <input type="text"  id="user_id" name="user_id" value="<?php echo $row->user_id; ?>" disabled class="form-control input-sm">
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Delivery Time</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <input type="time" id="delivery_time" name="delivery_time" placeholder="Enter Received Time Here" class="form-control input-sm">
                                </div>
                            </div>
                            
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Status</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control input-sm" placeholder="Delivered"  disabled value="Delivered" >
                                </div>
                            </div><br>

                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Remarks</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <textarea id="remarks" name="remarks" rows="5" placeholder="Remarks Here" class="form-control input-sm"></textarea>
                                </div>
                            </div> 
                           
                                <div style="margin-top:10px;" class="row">
                                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                    <div class="col-sm-8">
                                        <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Donation Delivered</button>                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <!--  ************************* Footer Starts Here ************************** -->
           <?php include 'common/footer.php'; ?>     
        </body>

        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
        <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>

        </html>