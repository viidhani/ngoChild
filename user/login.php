<?php

session_start();
include 'connection.php';
if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = $obj->Query("select * from user where email='$email' and password='$password'");
    $rowcount = $result->num_rows;

    if($rowcount==1)
    {

        $row = $result->fetch_object();

        $_SESSION["user_id"]= $row->user_id;
        $_SESSION["role_id"]= $row->role_id;

        if($row->role_id=='1')
        {
            header('location:volunteer_home.php');
        }
        else
        {
            header('location:user_home.php');
        }
    }
    else
    {
        echo "<script>alert('Invalid Email ID & Password')</script>";
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
                    <h2>Login Here</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Login Here</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">

                    <div style="padding:20px" class="col-sm-12">
                        <h2 >Login Here</h2> <br>
                        <form method="post">
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                            <div class="col-sm-8"><input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                        </div>
                        <div  class="row cont-row">
                            <div  class="col-sm-3"><label>Password </label><span>:</span></div>
                            <div class="col-sm-8"><input type="password" name="password" id="password" placeholder="Enter Password" class="form-control input-sm"  ></div>
                        </div>

                        <div style="margin-top:10px;" class="row">
                                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                        <div class="col-sm-8">
                                            <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Login</button>
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