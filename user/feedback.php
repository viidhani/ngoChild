<?php
session_start();

include 'connection.php';

$id = $_SESSION["user_id"];

$userdata = $obj->Query("select * from user where user_id='$id'");
$row = $userdata->fetch_object();

$username = $row->fname;
$date = date("y/m/d");


if(isset($_POST["submit"]))
{

$message = $_POST["message"];

$review = $_POST["review"];

    $insert = $obj->Query("INSERT INTO feedback(message,user_id,date,review) VALUES('$message','$id','$date','$review')");
        if($insert)
        {
            echo "<script>alert('Thank You For Your Feedback');document.location='profile.php';</script>";
        }
        else
        {
            echo "<script>alert('Error in Code');document.location='feedback.php';</script>";
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
                <h2>Feedback</h2>
                <ul>
                    <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                    <li><i class="fas fa-angle-double-right"></i> Feedback</li>
                </ul>
            </div>
        </div>
    </div>
    
    
   
  <!--  ************************* Contact Us Starts Here ************************** -->


  
    <div class="row contact-rooo no-margin">
        <div class="container">
            <div class="row">


                <div style="padding:20px" class="col-sm-7">
                    <h2 >Feedback Form</h2> <br>
                    <form method="post"> 
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Enter Message</label><span>:</span></div>
                        <div class="col-sm-8">
                            <textarea rows="5" id="message" name="message" placeholder="Enter Your Message" class="form-control input-sm"></textarea>
                        </div>
                    </div>
                    <div  class="row cont-row">
                        <div  class="col-sm-3"><label>Review</label><span>:</span></div>
                        <div class="col-sm-8">
                      <select class="form-control" id="review" name="review">
                      <option value="">---Your Review---</option>
                      <option value="1 Star">1 Star</option>
                      <option value="2 Star">2 Star</option>
                      <option value="3 Star">3 Star</option>
                      <option value="4 Star">4 Star</option>
                      <option value="5 Star">5 Star</option>
                    </select>
                        </div>
                    </div>
                    <div style="margin-top:10px;" class="row">
                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                        <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Send Message</button>                        
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