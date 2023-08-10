<?php
error_reporting(0);
session_start();
include 'connection.php';

?>
<header class="continer-fluid ">
    <div  class="header-top">
        <div class="container">
            <div class="row col-det">
                <div class="col-lg-6 d-none d-lg-block">
                    <ul class="ulleft">
                        <li>
                            <i class="far fa-envelope"></i>
                            Our Website
                            <span>|</span></li>
                            <li>
                            <i class="fas fa-phone-volume"></i>
                            +91 987 654 321 0</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 d-none d-md-block col-md-6 btn-bhed">
                        <?php
                        if(isset($_SESSION["user_id"]))
                        {
                            ?>
                            <a href="profile.php" class="btn btn-sm btn-success">My Profile  </a>
                            <a href="change_password.php" class="btn btn-sm btn-success">Change Password  </a>
                            <a href="logout.php" class="btn btn-sm btn-default">Logout  </a>
                            <?php
                        }
                        else
                        {
                            ?> 
                            <a href="registration.php" class="btn btn-sm btn-success">Registration Here  </a>
                            <a href="login.php" class="btn btn-sm btn-default">Login Here  </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="menu-jk" class="header-bottom">
            <div class="container">
                <div class="row nav-row">
                    <div class="col-lg-2 col-md-12 logo">
                        <a href="#">
                            <img src="assets/images/comeunitylogo.gif" height="100px" width="400px" alt="helpinghands">
                            <a data-toggle="collapse" data-target="#menu" href="#menu"><i class="fas d-block d-lg-none  small-menu fa-bars"></i></a>
                        </a>

                    </div>
                    <div id="menu" class="col-lg-10 col-md-12 d-none d-lg-block nav-col">
                        <?php
                        if(isset($_SESSION["user_id"])&&($_SESSION["role_id"]==2))
                        {
                            ?>

                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about_us.php">AboutUs</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="adoption.php">Adoption</a>
                                </li>

                               
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">Feedback</a>
                                </li> 
                                <li class="">
                                    <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="-webkit-border-radius:18px !important">
                                         Services
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="donation.php">Donate now</a>
                                        <a class="dropdown-item" href="event.php">Organize Event</a>
                                        <!-- <a class="dropdown-item" href="labourcomplain.php">Labour Complain</a> -->
                                        
                                    </div>
                                </div>
                            </li>

                            <li class="">
                                    <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="-webkit-border-radius:18px !important">
                                        My History
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="mydonations.php">My Donations</a>
                                        <a class="dropdown-item" href="myevent.php">My Events</a>
                                        <!-- <a class="dropdown-item" href="mycomplain.php">My Complains</a>
                                        --> <a class="dropdown-item" href="myadoption.php"> My Adoption Request</a>
                                    </div>
                                </div>
                            </li>
                                
                            </ul>
                            <?php
                        } 
                        else if(isset($_SESSION["user_id"])&&($_SESSION["role_id"]==1))
                        {
                            ?>
                            <ul class="navbad">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about_us.php">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="services.php">Services</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="gallery.php">Gallery</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="blog.php">Blog</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" href="feedback.php">Feedback</a>
                                </li> 
                                <li class="">
                                    <div class="dropdown">
                                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="-webkit-border-radius:18px !important">
                                         Donation Status
                                     </button>
                                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="pending_donation.php">Pending Donations</a>
                                        <a class="dropdown-item" href="accepted_donation.php">Accepted Donation</a>
                                        <a class="dropdown-item" href="received_donation.php">Received Donation</a>
                                    </div>
                                </div>
                            </li>


                        </ul>
                        <?php
                    } 
                    else 
                    {
                      ?>
                      <ul class="navbad">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about_us.php">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="inquiry.php">Inquiry</a>
                                </li> 
                    </ul>
                    <?php
                }
                ?>




            </div>
        </div>
    </div>
</div> 
</header>
