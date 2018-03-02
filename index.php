<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once('server.php');
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $msg = $_POST['message'];
    $query="insert into contact(name,email,message) 
                    values('$name','$email','$msg')";
    mysqli_query($con,$query);
    echo mysqli_error($con);
}
?>
<html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home- HealthCare Management</title>
    <meta name="description" content="Free bootstrap template Atlas">
    <link rel="icon" href="img/favicon.png" sizes="32x32" type="image/png">
    <!-- custom.css -->
    <link rel="stylesheet" href="../HMS/atlas/css/custom.css">
    <!-- bootstrap.min.css -->
    <link rel="stylesheet" href="../HMS/atlas/css/bootstrap.min.css">
	<!-- font-awesome -->
    <!-- <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
     -->
    <!-- AOS -->
    <link rel="stylesheet" href="../HMS/atlas/css/aos.css">
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(../HMS/atlas/img/banner-bk.jpg);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="../HMS/atlas/img/logo.png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="login.html" class="text-white lead">Register</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
            	A New Way<br>
            	To Health Care
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Hurry Up Register Now
                <br> If You Already Register Click on Login.
            </p>
            <a href="login.html" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Log in</a>
        </div>
    </div>
    <!-- three-blcok -->
    
    <!-- contact -->
    <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(../HMS/atlas/img/contact-bk.jpg);">
        <div class="container my-5">
            <div class="row justify-content-between">
                <div class="col-md-6 text-white">
                    <h2 class="font-weight-bold">Contact Us</h2>
                    <p class="my-4">
                        </p>
                    <ul class="list-unstyled">
                        <li>Email : company_email@com</li>
                        <li>Phone : 361-688-5824</li>
                        <li>Address : 4826 White Avenue, Corpus Christi, Texas</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form action="index.php" method="post">
                    	<div class="row">
	                        <div class="form-group col-md-6">
	                            <label for="name">Your Name</label>
	                            <input type="text" class="form-control" name="name">
	                        </div>
	                        <div class="form-group col-md-6">
	                            <label for="Email">Your Email</label>
	                            <input type="email" class="form-control" name="email">
	                        </div>
	                    </div>
	                    <div class="form-group">
	                        <label for="message">Message</label>
	                        <textarea class="form-control" name="message" rows="3"></textarea>
	                    </div>
                        <button type="submit" class="btn font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

	<!-- copyright -->
	<div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="container">
            <div class="row justify-content-between">
            	<div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                    Copyright © 2018.
                </div>
                <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-medium" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="d-inline-block text-center ml-2">
                    	<i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- AOS -->
    <script src="../HMS/atlas/js/aos.js"></script>
    <script>
      AOS.init({
      });
    </script>
</body>

</html>