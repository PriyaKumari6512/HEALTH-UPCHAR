
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> HEALTH UPCHHAR (+) </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">





    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- ? Preloader Start -->
    <!-- <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div> -->
    <!-- Preloader Start -->
<header>
    <!--? Header Start -->
    <div class="header-area">
        <div class="main-header header-sticky" style="padding: 5px; margin: 0px;">
            <div class="container-fluid" >
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="index.php"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end" style="margin: 10px;">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.php">Home</a></li>
                                        <!-- <li><a href="#">About</a></li> -->
                                        <li><a href="?page=doc">Doctors</a></li>
                                        <li><a href="?page=dept">Department</a></li>
                                        <!-- <li><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="?page=con">Contact</a></li>
                                        <li>
                                        <?php if (!$session_id) { ?>
                                        <a class="btn header-btn" data-bs-toggle="modal" id="signout" data-bs-target="#exampleModal"
                                                    style="font-size: 17px; font-weight: bold;padding: 10px; color: white; " href="">Sign Up /
                                                    Login</a>
                                        <?php } else { ?>
                                            <a class="btn header-btn" style="font-size: 17px; font-weight: bold;padding: 10px; color: white; " href="?function=logout">logout</a>
                                            <?php } ?>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                <a href="login.php" class="btn header-btn">LOGIN / REGISTRATION</a>
                            </div> -->
                        </div>
                    </div>   
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
        if($session_id){
            $querry="SELECT * FROM `all_user` WHERE `id` = '".$_SESSION['id']."' ";
            $result = mysqli_query($link,$querry);
            $user = mysqli_fetch_assoc($result);
        }
    ?>
    <!-- Header End -->
</header>