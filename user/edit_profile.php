<?php
session_start();
include 'connection.php';

$id = $_SESSION['user_id'];
$data = $obj->Query("select * from user where user_id='$id'");

$userdata = $data->fetch_object();
$gen = $userdata->gender;

if(isset($_POST["submit"]))
{
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $contactresult = $obj->Query("select * from user where contact='$contact' and user_id!='$id'");
    $contactrowcount = $contactresult->num_rows;
    if($contactrowcount==1)
    {
        echo "<script>alert('Contact Already Registered...');</script>";
    }
    $emailresult = $obj->Query("select * from user where email='$email' and user_id!='$id'");
    $emailrowcount = $emailresult->num_rows;
    if($emailrowcount==1)
    {
        echo "<script>alert('Email id Already Registered...');</script>";
    }
    else
    {
        $update = $obj->Query("Update user set fname='$fname',lname='$lname',dob='$dob',gender='$gender',email='$email',contact='$contact',address='$address' where user_id='$id'");
        if($update)
        {
            echo "<script>alert('Updated Successfully');document.location='Profile.php';</script>";
        }
        else
        {
            echo "<script>alert('Error in Code');document.location='Profile.php';</script>";
        }
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
                    <h2>Edit Profile</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Edit Your Profile</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-12">
                        <h2 >Edit Profile</h2> <br>
                        <form method="post">
                                <div class="row cont-row">
                                    <div  class="col-sm-3  p-t-25"><label>Enter First Name </label><span>:</span></div>
                                    <div class="col-sm-8 p-t-25"><input type="text" placeholder="Enter First Name" class="form-control input-sm"  id="fname" name="fname" value="<?php echo $userdata->fname; ?>"></div>
                                </div>
                                <div class="row cont-row">
                                    <div  class="col-sm-3"><label>Enter Last Name </label><span>:</span></div>
                                    <div class="col-sm-8"><input type="text" placeholder="Enter Last Name"  class="form-control input-sm"  id="lname" name="lname" value="<?php echo $userdata->lname; ?>"></div>
                                </div>
                                <div class="row cont-row">
                                    <div  class="col-sm-3"><label>Gender </label><span>:</span></div>
                                    <div class="col-sm-8">
                                        <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="gender" class="form-control" id="Male" value="Male"<?php if($gen=='Male') echo 'checked'; ?>> Male <br>   
                                        <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="gender" class="form-control" id="Female" value="Female"<?php if($gen=='Female') echo 'checked'; ?>> Female <br></div>
                                    </div>
                                    <div class="row cont-row">
                                        <div  class="col-sm-3"><label>Date of Birth </label><span>:</span></div>
                                        <div class="col-sm-8"><input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" class="form-control input-sm"  value="<?php echo $userdata->dob; ?>"></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                                        <div class="col-sm-8"><input type="text" name="email" id="email" placeholder="Enter Email Address" class="form-control input-sm" value="<?php echo $userdata->email; ?> "></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                                        <div class="col-sm-8"><input type="text" name="contact" id="contact" placeholder="Enter Mobile Number" class="form-control input-sm" value="<?php echo $userdata->contact; ?> "></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Address</label><span>:</span></div>
                                        <div class="col-sm-8">
                                            <textarea rows="3" placeholder="Enter Your Address Here" name="address" id="address" class="form-control input-sm"><?php echo $userdata->address; ?></textarea>
                                        </div>
                                    </div>

                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Registration Date</label><span></span></div>
                                        <div class="col-sm-8">

                                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control" placeholder="  No Need to Enter" name="reg_date" id="reg_date" onkeydown="return false;" disabled value="<?php echo $userdata->reg_date; ?>">
                                        </div>
                                    </div>

                                    <div style="margin-top:10px;" class="row">
                                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                        <div class="col-sm-8">
                                            <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Update Profile</button>
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