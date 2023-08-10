 
<?php

session_start();

include 'connection.php';

$child = $obj->Query("select * from child");

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
                 
     <!-- #################Adoption  Start Here#######################--->
    <section class="events">
        <div class="container">
            <div class="session-title row">
                <h2>Adoption Details</h2>
                <p>We are a non-profital & Charity raising money for child education</p> 
            </div>

            <div class="event-ro row">
                 <?php while($childdata = $child->fetch_object()) {?>
       
                <div class="col-md-4 col-sm-6">
                    <div class="event-box">
                        <img src="../admin/UploadImage/<?php echo $childdata->gallery; ?>" height=300px; width=300px; alt="">
                        <h4><?php echo $childdata->name; ?></h4>
                        
                        <p class="desic"><?php echo $childdata->about; ?></p>
                       <a href="aboutchild.php?childid=<?php echo $childdata->child_id; ?>" class="btn btn-primary">More Information</a>                     
                        
                    </div>
                </div>
               <?php }?>  
           </div>
        </div>
    </section>   
    

   
   
    <!-- ################# Charity Number Starts Here#######################--->


         
    <!--################### Our Team Starts Here #######################--->
         
          
    
    <!-- ################# Our Blog Starts Here#######################--->

          <?php include 'common/footer.php'; ?>
          
    
</body>

<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>