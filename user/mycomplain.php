<?php

session_start();
include 'connection.php';

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
}

$id = $_SESSION["user_id"];

$selectlabour = $obj->Query("SELECT * from all_labour where user_id ='$id'");
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
                    <h2>Complain Details</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>My Complains</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



       
             <center>
            <main class="content ">
                <div class="container-fluid p-0">
                    

                <div class="card m-5 " style="width:80%; ">
                                <table class="table table-primary text-center" style="width:100%;">
                                         <div class="card-header">
                             <h5 class="card-title">My Labour Complains</h5>
                                    
                                </div>
                           
                                        <thead>
                                        <tr class="table-primary">
                                            <th style="width:20%;">Complain ID</th>
                                             <th style="width:20%">Subject</th>
                                             <th style="width:20%">Description</th>
                                             <th style="width:10%">Date</th>
                                              <th style="width:10%">Status</th>
                                               <th style="width:10%">Area ID</th>
                                                <th style="width:40%">Gallery</th>
                                           </tr>

                   <?php while ($row = $selectlabour->fetch_object())
                                        {
                                        ?>
                                        <tr class="table-success">    
                                            <td><?php echo $row->labourchild_id; ?></td>
                                            <td><?php echo $row->subject; ?></td>
                                            <td><?php echo $row->description; ?></td>
                                            <td><?php echo $row->date; ?></td>
                                            <td><?php echo $row->status; ?></td>
                                           <td><?php echo $row->area_id; ?></td>
                                           <td><img src="labourimage/<?php echo $row->gallery; ?>" height="100" width="100"></image></td><td><?php echo $row->gallery; ?></td>
                                        </tr>
                                        <?php
                                     }
                                      ?>

                                    </thead>
                                    
                                    </tbody>
                                </table>
                            </div>
                </div>
                                                   
            </main>
        </center>

            <!--  ************************* Footer Starts Here ************************** -->

</body>            <?php include 'common/footer.php'; ?>     

        </body>

        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
        <script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
        <script src="assets/js/script.js"></script>

        </html>