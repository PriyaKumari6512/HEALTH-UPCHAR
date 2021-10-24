<?php 
if(isset($_POST['create_acc'])){
    $name =mysqli_real_escape_string($link, $_POST['name']);
    $email =mysqli_real_escape_string($link, $_POST['email']);
    $phone =mysqli_real_escape_string($link, $_POST['p_no']);
    $age =mysqli_real_escape_string($link, $_POST['age']);
    $gender =mysqli_real_escape_string($link,  $_POST['gender']);
    $password = mysqli_real_escape_string($link, $_POST['pass']);
    $repassword = mysqli_real_escape_string($link, $_POST['rpass']);
    
    $quirey = "SELECT * FROM `all_user` WHERE `phone_no` = '$phone' LIMIT 1";
    $result = mysqli_query($link, $quirey);
    $fetch = mysqli_fetch_assoc($result);
    if(!$fetch){
        if($password==$repassword){
            $quary = "INSERT INTO `all_user`(`name`,`email`,`phone_no`,`age`,`gender`,`password`) VALUE ('$name','$email','$phone','$age','$gender','$password') ";
            if(mysqli_query($link,$quary)){
                echo "<script>alert('Account created sucessfully');</script>";
                echo "<script>window.location.href ='http://localhost/my_website/';</script>";
            }else{
                echo "<script>alert('Somthing went wrong');</script>";

            }
        }
        else{
            echo "<script> alert('Password not same'); </script>";
        }
    }else{
        echo "<script>alert('The phone number is already used');</script>";

    }

}

if(isset($_POST['button'])){
    $email =mysqli_real_escape_string($link,$_POST['emaila']);
    $password =mysqli_real_escape_string($link,$_POST['passa']);
    
    if ($email == "") {
        echo "<script> alert('Please Enter your Email'); </script>";
    } elseif ($password == "") {
        echo "<script> alert('Please Enter your Password'); </script>";
    } else {
        $query1 = "SELECT * FROM `all_user` WHERE `email` = '".$email."'";
        $res = mysqli_query($link, $query1);
        $fetch = mysqli_fetch_assoc($res);
        if ($fetch['password'] ==$password) {
            $_SESSION['id'] = $fetch['id'];
            echo '<script>window.location.href = "http://localhost/my_website/";</script>';
        } else {
            echo " <script> alert('Enter correct username/password'); </script>";
        }
    }
    
}

?>

<footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/footer_bg.jpg">
            <div class="container">
                <div class="footer-top footer-padding">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>About Us</h4>
                                    <div class="footer-pera">
                                        <p class="info1">Lorem igpsum doldfor sit amet, adipiscing elit, sed do eiusmod tempor cergelit rgh. </p>
                                        <p class="info1">Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-number mb-50">
                                    <h4><span>+564 </span>7885 3222</h4>
                                    <p>youremail@gmail.com</p>
                                </div>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                            <input type="email" name="EMAIL" id="newsletter-form-email" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                    Send
                                                </button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="footer-copy-right">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4">
                            <!-- Footer Social -->
                            <div class="footer-social f-right">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- modal of login and signup -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" style="margin-top: 15px; align-items: flex-end;" aria-label="Close"></button> -->

                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Sign Up</h3>
                </div>
                <div class="modal-body">

                    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
                    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

                    <!-- YEAH MAINE ADD KIYA HAI -->
                    <link href="http://fonts.googleapis.com/css?family=Nunito:400,600,800&display=swap" rel="stylesheet">
                    <!------ Include the above in your HEAD tag ---------->

                    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

                    <div class="container">
                        <div class="card bg-light">
                            <article class="card-body mx-auto" style="max-width: 400px;">
                                <h4 class="card-title mt-3 text-center" id="craccount">Create Account</h4>
                                
                                
                                <!-- for signup -->
                                <form method="POST" id="activeSignup" name="activeSignup" enctype="multipart/form-data">
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                        </div>
                                        <input name="name" class="form-control" placeholder="Full name" type="text">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        </div>
                                        <input name="email" class="form-control" placeholder="Email address"
                                            type="email">
                                    </div>
                                    <!-- form-group end.// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class=" fas fa-phone-volume"></i> </span>
                                        </div>
                                        <input name="p_no" class="form-control" placeholder="phone no"
                                            type="text" minlength="10" maxlength="14">
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="far fa-images"></i> </span>
                                        </div>
                                        <input name="age" class="form-control" placeholder=" Enter your age"
                                            type="text">
                                    </div>
                                    <div class="form-group ">
                                        <!-- <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
                                        </div> -->
                                        <div class="radio">
                                            <span class="input-group-text"> <i class="fas fa-venus-mars">&nbsp;</i>
                                             &nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="male" >male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="female">female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value ="others">others
                                            </label>
                                        </span>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input name="pass" class="form-control" placeholder="Create password"
                                            type="password" minlength="8">
                                    </div> <!-- form-group// -->

                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input name="rpass" class="form-control" placeholder="Repeat password"
                                            type="password" minlength="8">
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <button name="create_acc" type="submit" class="btn btn-primary btn-block">
                                            Create
                                            Account </button>
                                    </div> <!-- form-group//?page=login -->
                                    <p class="text-center">Already have an account? <a href="#" id="loginbt"
                                            name="loginbt" style="color: blue;">Log In</a> </p>
                                </form>
                                <!-- for login -->
                                <form method="POST" id="activeLogin" name="activeLogin">
                                    <div class="form-group input-group"></div> <!-- form-group// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                                        </div>
                                        <input name="emaila" class="form-control" placeholder="Email address"
                                            type="email">
                                    </div> <!-- form-group// -->
                                    <div class="form-group input-group"></div>
                                    <!-- form-group// -->
                                    <!-- form-group end.// -->
                                    <div class="form-group input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                        </div>
                                        <input class="form-control" placeholder="Enter your password" type="password"
                                            name="passa">
                                    </div> <!-- form-group// -->

                                    <div class="form-group">
                                        <button type="submit" id="login_btn" class="btn btn-primary btn-block"
                                            name="button"> Log in </button>
                                        <p class="text-center">Don't have an account? <a href="#" id="Signupbt"
                                                name="Signupbt" style="color: blue;">Signup</a> </p>
                                    </div>
                                </form>
                            </article>
                        </div> <!-- card.// -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end login and signup -->

        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
    <!-- JS here -->
    <script>
        $("#activeSignup").hide();
    $("#craccount").hide();
    $("#exampleModalLabel").text("Log In");
    $("#loginbt").click(function () {

        $("#activeSignup").hide();
        $("#activeLogin").show();
        $("#exampleModalLabel").text("Log In");
        $("#craccount").hide();
    });

    $("#Signupbt").click(function () {

        $("#activeSignup").show();
        $("#activeLogin").hide();
        $("#exampleModalLabel").text("Sign Up");
        $("#craccount").show();
    });
    </script>
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>