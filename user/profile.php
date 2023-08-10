<?php

session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$id = $_SESSION["user_id"];
$result = $obj->Query("select * from user where user_id='$id'");
$row = $result->fetch_object();
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
                    <h2>My Profile</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Profile</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-12">
                        <h2 >My Profile</h2> <br>

                        <div class="row cont-row">

                            <div style="margin-top:10px; margin-bottom: 15px;" class="row">
                                <div style="padding-top:10px; margin-bottom: 15px" class="col-sm-3"><label></label></div>
                                <div class="col-sm-8">
                                    <a href="edit_profile.php" class="btn btn-primary btn-sm">Edit Profile</a>
                                </div>
                            </div>            </div>

                            <div class="row cont-row">
                                <div  class="col-sm-3  p-t-25"><label>Enter First Name </label><span>:</span></div>
                                <div class="col-sm-8 p-t-25"><?php echo $row->fname; ?></div>
                            </div>
                            <div class="row cont-row">
                                <div  class="col-sm-3"><label>Enter Last Name </label><span>:</span></div>
                                <div class="col-sm-8"><?php echo $row->lname; ?></div>
                            </div>
                            <div class="row cont-row">
                                <div  class="col-sm-3"><label>Gender </label><span>:</span></div>
                                <div class="col-sm-8">
                                 <?php echo $row->gender; ?></div>
                             </div>
                             <div class="row cont-row">
                                <div  class="col-sm-3"><label>Date of Birth </label><span>:</span></div>
                                <div class="col-sm-8"><?php echo $row->dob; ?></div>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                                <div class="col-sm-8"><?php echo $row->email; ?></div>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                                <div class="col-sm-8"><?php echo $row->contact; ?></div>
                            </div>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Address</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <?php echo $row->address; ?>
                                </div>
                            </div>

                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Registration Date</label><span></span></div>
                                <div class="col-sm-8">

                                    <?php echo $row->reg_date; ?>
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