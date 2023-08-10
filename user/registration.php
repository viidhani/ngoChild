<?php
include 'connection.php';
$city = $obj->Query("select * from city");
$area = $obj->Query("select * from area");

$reg_date = date("y/m/d");

if(isset($_POST["submit"]))
{
    $role_id = $_POST["role_id"];
    $city_id = $_POST["city_id"];
    $area_id = $_POST["area_id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $address = $_POST["address"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $contactresult = $obj->Query("select * from user where contact='$contact'");
    $contactrowcount = $contactresult->num_rows;
    if($contactrowcount==1)
    {
        echo "<script>alert('Contact Already Registered...');</script>";
    }

    $emailresult = $obj->Query("select * from user where email='$email'");
    $emailrowcount = $emailresult->num_rows;
    if($emailrowcount==1)
    {
        echo "<script>alert('Email id Already Registered...');</script>";
    }
    
    else if($password==$cpassword)
    {
        $insert = $obj->Query("INSERT INTO user(role_id,city_id,area_id,fname,lname,gender,dob,email,contact,address,password,reg_date) VALUES('$role_id','$city_id','$area_id','$fname','$lname','$gender','$dob','$email','$contact','$address','$password','$reg_date')");
        if($insert)
        {
            echo "<script>alert('Registration Successfully');document.location='login.php';</script>";
        }
        else
        {
            echo "<script>alert('Error in Code');document.location='registration.php';</script>";
        }
    }
    else
    {
        echo "<script>alert('Password and Confirm Password Does Not Match');document.location='registration.php';</script>";
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
                    <h2>Registration</h2>
                    <ul>
                        <li> <a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><i class="fas fa-angle-double-right"></i> Registration</li>
                    </ul>
                </div>
            </div>
        </div>



        <!--  ************************* Contact Us Starts Here ************************** -->



        <div class="row contact-rooo no-margin">
            <div class="container">
                <div class="row">


                    <div style="padding:20px" class="col-sm-12">
                        <h2 >Registration Here</h2> <br>
                        <form method="post">
                            <div class="row cont-row">
                                <div  class="col-sm-3"><label>Select Your Role </label><span>:</span></div>
                                <div class="col-sm-8">
                                    <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="role_id" class="form-control" id="1" value="1"> Volunteer <br>   
                                    <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="role_id" class="form-control" id="2" value="2"> User <br></div>
                                </div><br/>
                            <div class="row cont-row">

                                 <div  class="col-sm-3"><label>Select City </label><span>:</span></div>
                                <div class="col-sm-8">
                                    <select class="form-control" id="city_id" name="city_id">
                                            <option value="">---Select City---</option>
                                            <?php while($comrow = $city->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $comrow->city_id; ?>"><?php echo $comrow->city_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row cont-row">

                                 <div  class="col-sm-3"><label>Select Area</label><span>:</span></div>
                                <div class="col-sm-8">
                                    <select class="form-control" id="area_id" name="area_id">
                                            <option value="">---Select Area---</option>
                                            <?php while($comrow = $area->fetch_object())
                                            {
                                            ?>
                                            <option value="<?php echo $comrow->area_id; ?>"><?php echo $comrow->area_name; ?></option>
                                            <?php
                                            }
                                            ?>
                                            </select>
                                        </div>
                                    </div>


                                <div class="row cont-row">
                                    <div  class="col-sm-3  p-t-25"><label>Enter First Name </label><span>:</span></div>
                                    <div class="col-sm-8 p-t-25"><input type="text" placeholder="Enter First Name" class="form-control input-sm"  id="fname" name="fname"></div>
                                </div>
                                <div class="row cont-row">
                                    <div  class="col-sm-3"><label>Enter Last Name </label><span>:</span></div>
                                    <div class="col-sm-8"><input type="text" placeholder="Enter Last Name"  class="form-control input-sm"  id="lname" name="lname" ></div>
                                </div>
                                <div class="row cont-row">
                                    <div  class="col-sm-3"><label>Gender </label><span>:</span></div>
                                    <div class="col-sm-8">
                                        <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="gender" class="form-control" id="Male" value="Male"> Male <br>   
                                        <input class="stext-111 cl1 plh1 size-16 p-l-62 p-r-30" type="radio" name="gender" class="form-control" id="Female" value="Female"> Female <br></div>
                                    </div><br/>
                                    <div class="row cont-row">
                                        <div  class="col-sm-3"><label>Date of Birth </label><span>:</span></div>
                                        <div class="col-sm-8"><input type="date" placeholder="Enter Date of Birth" name="dob" id="dob" class="form-control input-sm"  ></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Email Address </label><span>:</span></div>
                                        <div class="col-sm-8"><input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control input-sm"  ></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Mobile Number</label><span>:</span></div>
                                        <div class="col-sm-8"><input type="text" name="contact" id="contact" placeholder="Enter Mobile Number" class="form-control input-sm"  ></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Address</label><span>:</span></div>
                                        <div class="col-sm-8">
                                            <textarea rows="3" placeholder="Enter Your Address Here" name="address" id="address" class="form-control input-sm"></textarea>
                                        </div>
                                    </div>

                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Password</label><span>:</span></div>
                                        <div class="col-sm-8"><input type="password" name="password" id="password" placeholder="Enter Password" class="form-control input-sm"  ></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Confirm Password</label><span>:</span></div>
                                        <div class="col-sm-8"><input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" class="form-control input-sm"  ></div>
                                    </div>
                                    <div  class="row cont-row">
                                        <div  class="col-sm-3"><label>Registration Date</label><span></span></div>
                                        <div class="col-sm-8">

                                            <input class="stext-111 cl2 plh3 size-116 p-l-62 p-r-30" type="text" class="form-control" value="<?php echo $reg_date; ?>" name="reg_date" id="reg_date" onkeydown="return false;" disabled>
                                        </div>
                                    </div>

                                    <div style="margin-top:10px;" class="row">
                                        <div style="padding-top:10px;" class="col-sm-3"><label></label></div>
                                        <div class="col-sm-8">
                                            <button class="btn btn-primary btn-sm" name="submit" id="submit" value="submit">Submit</button>
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