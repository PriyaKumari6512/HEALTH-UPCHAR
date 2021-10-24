<?php 
if(isset($_POST['sumbit_paitent'])){
    if($_SESSION){
        $pname = $_POST['p_name'];
        $gname = $_POST['G_name'];
        $address=$_POST['Address'];
        $aadhar_no=$_POST['A_no'];
        $p_no=$_POST['p_number'];
        $email=$_POST['email'];
        $message=$_POST['message'];
        $user_id = $_SESSION['id'];
        // echo $pname. " " . $gname. " " . $address. " " . $aadhar_no. " " . $p_no. " " .$email . " " .$message;
        $pquary="INSERT INTO `patient_details`(`user_id`,`p_name`,`g_name`,`phone_no`,`email`,`address`,`aadhar_no`,`message`) VALUE ('$user_id','$pname','$gname','$p_no','$email','$address','$aadhar_no','$message')";
        $p_result = mysqli_query($link,$pquary);
        if($p_result){
            echo "<script>window.location.href ='http://localhost/my_website/';</script>";  
        }
    }else{
        echo "<script> alert('Please Login First.');</script>";
    }
    
}

?>
<main>
    <!--? slider Area Start-->
    <div class="slider-area position-relative">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                            <div class="hero__caption">
                                <span>PROMISE TO BE HEALTHY</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">ENJOYS PERSONAL,CONVENIENT AND RESPONSIVE SERVICE </p>
                                <!-- <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                        <div class="hero__caption">
                                <span>PROMISE TO BE HEALTHY</span>
                                <h1 class="cd-headline letters scale">We care about your 
                                    <strong class="cd-words-wrapper">
                                        <b class="is-visible">health</b>
                                    </strong>
                                </h1>
                                <p data-animation="fadeInLeft" data-delay="0.1s">ENJOYS PERSONAL,CONVENIENT AND RESPONSIVE SERVICE </p>
                                <!-- <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.5s">Appointment <i class="ti-arrow-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? About Start-->
    <div class="about-area section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        
                        <div class="section-tittle section-tittle2 mb-35">
                            <span>About Our WEBSITE</span>
                            <h2>WELCOME TO HEALTH UPCHHAR  +</h2>
                        </div>
                        <p> VISIT OUR WEBSITE,PEOPLE MAY BE SURE THAT THEY TRUST TRAKING CARE OF THEIR HEALTH TO REAL SPECIALIST</p>
                        <!-- <div class="about-btn1 mb-30">
                            <a href="about.html" class="btn about-btn">Find Doctors .<i class="ti-arrow-right"></i></a>
                        </div>
                        <div class="about-btn1 mb-30">
                            <a href="about.html" class="btn about-btn2">Appointment <i class="ti-arrow-right"></i></a>
                        </div> -->
                        <div class="about-btn1 mb-30">
                            <a href="" class="btn about-btn2">Contact Us <i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    
                    <div class="about-img ">
                        <div class="about-font-img d-none d-lg-block">
                            <img src="assets/img/gallery/about2.png" alt="">
                        </div>
                        <div class="about-back-img ">
                            <img src="assets/img/gallery/about1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About  End-->

     <!--? Contact form Start -->
     <div class="contact-form-main">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-xl-7 col-lg-7">
                    <div class="form-wrapper">
                        <!--Section Tittle  -->
                        <div class="form-tittle">
                            <div class="row ">
                                <div class="col-xl-12">
                                    <div class="section-tittle section-tittle2">
                                        <h2> Patient Details</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Section Tittle  -->
                        <form id="contact-form" method="POST">
                            <div class="container row" style="padding: 0%;margin: 0%;">
                                <div class=" col-md-6" >
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="p_name" placeholder="Patient Name">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="G_name" placeholder="Guardian">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="Address" placeholder="Address">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-box user-icon mb-30">
                                        <input type="text" name="A_no" placeholder="Aadhar number">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-box email-icon mb-30">
                                        <input type="text" name="p_number" placeholder="Phone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-box subject-icon mb-30">
                                        <input type="Email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-65">
                                        <textarea name="message" id="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="btn" type="submit" name="sumbit_paitent">Submit Now <i class="ti-arrow-right"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact left Img-->
        <div class="from-left d-none d-lg-block">
            <img src="assets/img/gallery/contact_form.png" alt="">
        </div>
    </div>
    <!-- Contact form End -->
    <!--? gallery Products Start -->
    <div class="gallery-area fix">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                             <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6">
                    <div class="gallery-box">
                        <div class="single-gallery">
                            <div class="gallery-img " style="background-image: url(assets/img/gallery/gallery6.png);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </main>
    