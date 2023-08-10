<?php
error_reporting(0);
session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$id = $_SESSION["user_id"];
$catresult = $obj->Query("select * from category");
$cityresult = $obj->Query("select *from city");
$arearesult = $obj->Query("select *from area");


$date = date("y/m/d");


if(isset($_POST["submit"]))
{

    $cat_id = $_POST["cat_id"];
    $subject = trim($obj->real_escape_string($_POST["subject"]));
    $description = trim($obj->real_escape_string($_POST["description"]));
    $status = $_POST["status"];
    $city_id = $_POST["city_id"];
    $area_id = $_POST["area_id"];
    $pickadd = trim($obj->real_escape_string($_POST["pickadd"]));
    $time = $_POST["time"];
   

    $insert = $obj->Query("INSERT INTO donation_user(cat_id,city_id,area_id,user_id,subject,description,pickadd,date,time,status) VALUES('$cat_id','$city_id','$area_id','$id','$subject','$description','$pickadd','$date','$time','Pending')");
    if($insert)
    {
        echo "<script>alert('Thank You For Donation');document.location='mydonations.php';</script>";
    }
    else
    {
        echo "<script>alert('Error in Code');document.location='donation.php';</script>";
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
                    <h2>Donation Form</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Donation</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-7">
                        <h2 >Alone we can do so little... Together we can do so much... </h2> <br>
                        <form method="post"> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Category Type</label><span>:</span></div>
                                <div class="col-sm-8">
                                            <select class="form-control" id="cat_id" name="cat_id">
                                            <option value="">---Select Category---</option>
                                            <?php while($comrow = $catresult->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $comrow->cat_id; ?>"><?php echo $comrow->cat_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Subject</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <input type="text"  id="subject" name="subject" placeholder="Subject Details" class="form-control input-sm">
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Description</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <textarea rows="5" id="description" name="description" placeholder="Description Here" class="form-control input-sm"></textarea>
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Pick Up Address</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <textarea rows="5" id="pickadd" name="pickadd" placeholder="Pick Up Address Here" class="form-control input-sm"></textarea>
                                </div>
                            </div>

                           <div  class="row cont-row">
                                <div  class="col-sm-3"><label>City</label><span>:</span></div>
                                <div class="col-sm-8">
                                            <select class="form-control" id="city_id" name="city_id">
                                            <option value="">---Select City---</option>
                                            <?php while($comrow1 = $cityresult->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $comrow1->city_id; ?>"><?php echo $comrow1->city_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Area</label><span>:</span></div>
                                <div class="col-sm-8">
                                            <select class="form-control" id="area_id" name="area_id">
                                            <option value="">---Select Area---</option>
                                            <?php while($comrow2 = $arearesult->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $comrow2->area_id; ?>"><?php echo $comrow2->area_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        
                                </div>
                            </div> 
                            
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Date</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control input-sm" placeholder="<?php echo $date; ?>" name="date" id="date"  disabled>
                                </div>
                            </div><br>

                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Time</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="Time" class="form-control input-sm" placeholder="Pick Up Time" name="time" id="time" >
                                </div>
                            </div><br>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Status</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control input-sm" placeholder="Pending" name="staus" id="status" disabled value="pending" >
                                </div>
                            </div><br>

                        
                           
                                <div style="margin-top:10px;" class="row">
                                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                    <div class="col-sm-8">
                                        <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Submit Donation</button>                        
                                    </div>
                                </div>
                            </form>
                        </div> <div class="col-sm-5">

                            <div style="margin:50px" class="serv">
                                <h2 style="margin-top:10px;">We can do no great things, <br>only small things with great love.</h2>

                                Child Adoption <br>
                                Marthandam (K.K District) <br>
                                Ahmedabad, IND <br>
                                Phone: +91 9159669599 <br>
                                Email: <a href="mailto:info@anybiz.com" class="">childadoption@ngo.in</a><br>
                                Web: <a href="smart-eye.html" class="">www.childadoption.in</a>

                            </div>


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