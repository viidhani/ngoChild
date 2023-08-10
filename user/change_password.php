<?php 
session_start();
include 'connection.php';
$id = $_SESSION["user_id"];
$result1 = $obj->Query("select * from user where user_id='$id'");
$row1 = $result1->fetch_object();

if(isset($_POST['submit']))
{
  $oldp = $_POST["oldp"];
  $newp = $_POST["newp"];
  $cnewp = $_POST["cnewp"];


  $result = $obj->Query("select * from user where user_id='$id' and password='$oldp'");
  $rowcount = $result->num_rows;

    if($rowcount==1)
  {
    if($newp==$cnewp)
    {
      $update=$obj->Query("update user set password='$newp' where user_id='$id'");
      if($update)
      {
        echo "<script>alert('Password Updated Successfully');document.location='profile.php';</script>";
      }
      else
      {

        echo "<script>alert('Error In Code');document.location='change_password.php';</script>";
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
                    <h2>Change Your Password</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Change Your Password Here</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Change Password Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">

                    <div style="padding:20px" class="col-sm-12">
                        <h2 >Change Password</h2> <br>
                        <form method="post">
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Old Password </label><span>:</span></div>
                            <div class="col-sm-8"><input type="password" name="oldp" id="oldp" placeholder="Enter Old Password" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>New Password </label><span>:</span></div>
                            <div class="col-sm-8"><input type="password" name="newp" id="newp" placeholder="Enter New Password" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Confirm New Password </label><span>:</span></div>
                            <div class="col-sm-8"><input type="password" name="cnewp" id="cnewp" placeholder="Confirm New Password" class="form-control input-sm"  ></div>
                        </div>

                        <div style="margin-top:10px;" class="row">
                                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                        <div class="col-sm-8">
                                            <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Update Password</button>
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