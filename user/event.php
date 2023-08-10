<?php
error_reporting(0);
session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$id = $_SESSION["user_id"];

if(isset($_POST["submit"]))
{

    $event_title = $_POST["event_title"];
    $event_description = trim($obj->real_escape_string($_POST["event_description"]));
    $status = $_POST["status"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    

    $insert = $obj->Query("INSERT INTO event(event_title,event_description,user_id,date,time) VALUES('$event_title','$event_description','$id','$date','$time')");
    if($insert)
    {


        echo "<script>alert('Event Submitted');document.location='myevent.php';</script>";
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
                    <h2>Event Form</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Event</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-7">
                        <h2 >Lets Plan Event Together</h2> <br>
                        <form method="post"> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Event Title</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <input type="text"  id="event_title" name="event_title" placeholder="Title of Your Event" class="form-control input-sm">
                                </div>
                            </div> 
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Event Description</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <textarea rows="5" id="event_description" name="event_description" placeholder="Event Description Here" class="form-control input-sm"></textarea>
                                </div>
                            </div> 
                           
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Date</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="date" class="form-control input-sm" placeholder="Event Date" name="date" id="date">
                                </div>
                            </div><br>

                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Time</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="Time" class="form-control input-sm" placeholder="Event Time" name="time" id="time" >
                                </div>
                            </div><br>
                            <div  class="row cont-row">
                                <div  class="col-sm-3"><label>Status</label><span></span></div>
                                <div class="col-sm-8">

                                    <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control input-sm" placeholder="Pending" name="staus" id="status" disabled>
                                </div>
                            </div><br>
                           
                                <div style="margin-top:10px;" class="row">
                                    <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                    <div class="col-sm-8">
                                        <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Submit Event</button>                        
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