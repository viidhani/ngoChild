<?php

session_start();
include 'connection.php';
$childid = $_GET["childid"];
$child=$obj->Query("select * from child where child_id='$childid'");

if(!isset($_SESSION["user_id"]))
{
    header('location:login.php');
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
                    <h2>Child Details</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i>Informations</li>
                    </ul>
                    <div>
                    </div>
                </div>



                <!--  ************************* Contact Us Starts Here ************************** -->




                <center>
                    <main class="content ">
                        <div class="container-fluid p-0">


                            <div class="card m-5 " style="width:60%; ">
                                <table class="table table-primary text-center" style="width:100%;">
                                   <div class="card-header">
                                       <h5 class="card-title">About Child</h5>
                                   </div>


                                   <thead>
                                    <?php while ($row = $child->fetch_object())
                                    {
                                    ?>
                                    <tr class="table-primary">
                                            <th style="width:20%;">Child Name</th>
                                            <td><?php echo $row->name; ?></td>
                                        </tr>

                                    <tr class="table-danger">
                                       <th style="width:20%">Photo</th>
                                       <td><img src="../admin/UploadImage/<?php echo $row->gallery; ?>" height=300px; width=300px; alt="">
                                       </td>
                                    </tr>
                                    <tr class="table-success">
                                           <th style="width:20%">Age</th>
                                           <td><?php echo $row->age; ?></td>
                                    </tr>
                                    <tr class="table-primary">
                                           <th style="width:20%">Height</th>
                                           <td><?php echo $row->height; ?></td>
                                    </tr>
                                    <tr class="table-success">

                                           <th style="width:20%">Weight</th>
                                           <td><?php echo $row->weight; ?></td>

                                    </tr>
                                    <tr class="table-primary">
                                        <th style="width:20%;">Color</th>
                                        <td><?php echo $row->color; ?></td>
                                    </tr>
                                    <tr class="table-success">
                                        <th style="width:20%;">Gender</th>
                                        <td><?php echo $row->gender; ?></td>
                                    </tr>
                                    <tr class="table-primary">

                                       <th style="width:20%">About</th>
                                       <td><?php echo $row->about; ?></td>

                                   </tr>
                                   <tr >
                                    <td colspan="2">
                                        <a href="adoptionprocess.php?childid=<?php echo $row->child_id; ?>" class="btn btn-primary">Adoption Request</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <a href="adoption.php" class="btn btn-primary">Back To Adoption Page</a></td>
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
</div>
</div>
</body>
<?php include 'common/footer.php'; ?>     


<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="assets/plugins/slider/js/owl.carousel.min.js"></script>
<script src="assets/js/script.js"></script>

</html>