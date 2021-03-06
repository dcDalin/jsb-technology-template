<?php 

    // include phpmailer class
	require_once 'mailer/class.phpmailer.php';
	// creates object
    $mail = new PHPMailer(true);
    

    if(filter_has_var(INPUT_POST, 'btn-send')){
        try {
            $name = trim($_POST['name']);
            $customerEmail = trim($_POST['email']);
            $message = trim($_POST['message']);
            
            $email = 'oneilstephen95@gmail.com';
            $subject = $name.','.$customerEmail;

            $response = array();

            try
			{
				$mail->IsSMTP(); 
				$mail->isHTML(true);
				$mail->SMTPDebug  = 0;                     
                $mail->SMTPAuth   = true;                  
                $mail->SMTPSecure = "";                 
                $mail->Host       = "mail.jsb-technology.com";      
                $mail->Port       = 25;             
				$mail->AddAddress($email);
				$mail->Username="info@jsb-technology.com";  
                $mail->Password="password";            
                $mail->SetFrom('info@jsb-technology.com','JSB-Technology');
                $mail->AddReplyTo("info@jsb-technology.com","JSB-Technology");         
				$mail->Subject    = $subject;
				$mail->Body 	  = $message;
				$mail->AltBody    = $message;
					
				if($mail->Send())
				{
                    $response['status'] = 'success'; // Email sent successfully
                    $response['message'] = 'Success, we have received your email';					
				}else{
                    $response['status'] = 'error'; // Email not sent
                    $response['message'] = 'Sorry, email not sent';
                }
                echo json_encode($response);
                exit; 
			}
			catch(phpmailerException $ex)
			{
				$response['status'] = 'error'; // Email not sent
                $response['message'] = 'Sorry, email not sent';
			}
        }catch(Exception $e){
            echo $e;
        }
    }
    /* End ajax login process */
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>JSB - Technology</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">

        <!--Google Font link-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


        <link rel="stylesheet" href="assets/css/slick/slick.css"> 
        <link rel="stylesheet" href="assets/css/slick/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/iconfont.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">

        <!-- xsslider slider css -->


        <!--<link rel="stylesheet" href="assets/css/xsslider.css">-->




        <!--For Plugins external css-->
        <!--<link rel="stylesheet" href="assets/css/plugins.css" />-->

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--<link rel="stylesheet" href="assets/css/colors/maron.css">-->

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse">


        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 0736 421 546</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: info@jsb-technology.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href=""><i class="Send us anfa fa-google-plus"></i></a></li>
                                        <li><a href=""><i class="fa fa-behance"></i></a></li>
                                        <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Start Top Search -->
                <div class="top-search">
                    <div class="container">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search"></i></span>
                            <input type="text" class="form-control" placeholder="Search">
                            <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->


                <div class="container"> 
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div> 

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <!-- <img src="assets/images/logo.png" class="logo" alt=""> -->
                            <!--<img src="assets/images/footer-logo.png" class="logo logo-scrolled" alt="">-->
                            <h1 style="font-weight: bold; color: red;">JSB</h1>
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#about">About</a></li>
                            <li><a href="#products-and-services">Products</a></li>
                            <li><a href="#services">Services</a></li>
                            
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-white">When it's <strong>absolute and positive</strong></h1>
                                            <h2 class="text-white">It has to be JSB Limited</h2>
                                            <br />
                                            <h4 class="text-white">Hello, <strong>we are here to help you.</strong></h4>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="#contact" class="btn btn-default m-top-20"><i class="fa fa-envelope" aria-hidden="true"></i>  Send us an email.</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h1 class="text-white">Your <strong>flexible friend</strong></h1>
                                            <h2 class="text-white">We go out of our way to give you nothing but the best.</h2>
                                            <br />
                                            <h4 class="text-white">Hello, <strong>we are here to help you.</strong></h4>
                                        </div>

                                        <div class="home_btns m-top-40">
                                            <a href="#contact" class="btn btn-default m-top-20"><i class="fa fa-envelope" aria-hidden="true"></i>  Send us an email.</a>
                                        </div>
                                    </div><!-- End off slid item -->
                                    
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->

            <!--About Section-->
            <section id="about" class="business bg-grey roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            <div class="col-md-6">
                                <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="assets/images/orig-logo.png" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="assets/images/orig-logo.png" alt="" />
                                            </div>
                                        </div>

                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="business_item sm-m-top-50">
                                    <h2 class="text-uppercase"><strong>About</strong> JSB Technology Limited.</h2>
                                    <!-- <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> Clean & Modern Design</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Fully Responsive</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Google Fonts</li>
                                    </ul> -->
                                    <p class="m-top-20">
                                        We strive to offer best products and services with reliable technology.

                                    <p>
                                        JSB Tech Limited is an Automotive and Information Technology company 
                                        located in Nairobi Kenya, servicing clients nationwide.
                                    </p>
                                    <p>
                                        JSB Tech Limited comprises of a professional team that has an established 
                                        and dedicated staff with best experience. Our company is one of the 
                                        leading provider of business and education in Automotive parts and IT 
                                        solutions in Nairobi. Partnering with the best of breed companies such 
                                        as Schrader International, Huf-Group and Hewlett-Packard, we employ best
                                        practices.
                                    </p>
                                    <p>
                                        We are extremely committed to delivering quality advice, sales and
                                        support to assist our clients to achieve the maximum from their
                                        Automotive and IT investments by offering best products and services 
                                        with reliable technology.
                                    </p>

                                    <!-- <div class="business_btn">
                                        <a href="https://bootstrapthemes.co" class="btn btn-default m-top-20">Read More</a>
                                        <a href="" class="btn btn-primary m-top-20">Buy Now</a>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off About section -->

            <!--product section-->
            <section id="products-and-services" class="product">
                <div class="container">
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Products and Services</h2>
                            <!-- <h5>Clean and Modern design is our best specialist</h5> -->
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/products/p1.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/products/p1.jpg" height="262.5" width="226.28" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>CCTV</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/products/p2.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/products/p2.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Computers and Laptops</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/products/p3.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/products/p3.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Door Handle System</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/products/p4.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/products/p4.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Tire Pressure Monitoring System</h5>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/products/p5.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/products/p5.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Driver Authorization</h5>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->

                    
                </div><!-- End off container -->
            </section><!-- End off Product section -->


            <!--services section-->
            <section id="services" class="product">
                <div class="container">
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Services</h2>
                            <!-- <h5>Clean and Modern design is our best specialist</h5> -->
                        </div>
                        <div class="row">
                            <div class="main_features fix roomy-70">
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Installation of Tire Pressure Monitoring System (TPMS) for all vehicle models.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Installation of Closed Circuit Television (CCTV) for all premises (shops, salons, institutions)</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Installation of Car Anti-Theft Alarm Systems, Door Handle Systems and Driver Authorization System for all vehicle models.</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Total Site IT Management</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Internet services and website hosting</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Installation of network/server</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Workshop Repair and On-site service</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Computer and Laptop Repair and Maintainance</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="features_item sm-m-top-30">
                                        <div class="f_item_icon">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="f_item_text">
                                            <h5>Website, Desktop and Mobile App Development</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End off row -->
                    </div>
                </div>
            </section>
            <!-- end of services section -->

            <!--Call to  action section-->
            <section id="action" class="action bg-primary roomy-40">
                <div class="container">
                    <div class="row">
                        <div class="maine_action">
                            <div class="col-md-8">
                                <div class="action_item text-center">
                                    <h2 class="text-white text-uppercase">Contact Us Now</h2>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="action_btn text-left sm-text-center">
                                    <a href="" class="btn btn-default"><i class="fa fa-phone"></i>&nbsp; +254 736 421 546</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>




            <footer id="contact" class="footer action-lage bg-black p-top-80">
                <!--<div class="action-lage"></div>-->
                <div class="container">
                    <div class="row">
                        <div class="widget_area">
                            <div class="col-md-3">
                                <div class="widget_item widget_about">
                                    <h5 class="text-white">Info</h5>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-location-arrow"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Location</h6>
                                            <p>
                                                Moi Drive, Joakim Plaza 
                                            </p>
                                            <p>
                                                Nairobi, Kenya        
                                            </p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-phone"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Phone :</h6>
                                            <p>+254 736 421 546</p>
                                        </div>
                                    </div>
                                    <div class="widget_ab_item m-top-30">
                                        <div class="item_icon"><i class="fa fa-envelope-o"></i></div>
                                        <div class="widget_ab_item_text">
                                            <h6 class="text-white">Email Address :</h6>
                                            <p>info@jsb-technology.com</p>
                                        </div>
                                    </div>
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            <div class="col-md-9">
                                <div class="widget_item widget_latest sm-m-top-50">
                                    <h5 class="text-white">Email Us</h5>
                                    <form class="form-signin" method="post" id="send-email-form">
                                            <div id="errorDiv">
                                                <!-- error will be shown here ! -->
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="name">Your Name</label>
                                                <input type="text" class="form-control" placeholder="Your Name" name="name" id="name">
                                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                                <span class="help-block" id="error"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="email">Your Email</label>
                                                <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                                <span class="help-block" id="error"></span>
                                            </div>
                                            <div class="form-group has-feedback">
                                                <label for="message">Your Message</label>
                                                <textarea class="form-control" rows="5" name="message" id="message"></textarea>
                                                <span class="glyphicon glyphicon-pencil form-control-feedback"></span>
                                                <span class="help-block" id="error"></span>
                                            </div>
                                            <div class="row">
                                                
                                                <!-- /.col -->
                                                <div class="col-xs-6" style="float:right" id="btn-login-div">
                                                    <button type="submit" class="btn btn-primary btn-block btn-flat" name="btn-send" id="btn-send" >
                                                        Send Email <i class="fa fa-envelope"></i>
                                                    </button>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </form>
                                    
                                </div><!-- End off widget item -->
                            </div><!-- End off col-md-3 -->

                            
                        </div>
                    </div>
                </div>
                <div class="main_footer fix bg-mega text-center p-top-40 p-bottom-30 m-top-80">
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </footer>




        </div>

        <!-- JS includes -->

        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/jquery.validate.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.js"></script>
        <script src="assets/js/jquery.easing.1.3.js"></script>
        <script src="assets/css/slick/slick.js"></script>
        <script src="assets/css/slick/slick.min.js"></script>
        <script src="assets/js/jquery.collapse.js"></script>
        <script src="assets/js/bootsnav.js"></script>



        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>

        <script type="text/javascript">
        // valid email pattern
        var eregex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        $.validator.addMethod("validemail", function( value, element ) {
            return this.optional( element ) || eregex.test( value );
        });
        
        $('document').ready(function(){
             /* validation */
            $("#send-email-form").validate({
                rules:{
                    name:{
                        required: true,
                        minlength: 3
                    },
                    email:{
                        required: true,
                        validemail: true
                    },
                    message: {
                        required: true,
                        minlength: 20
                    },
                },
                messages:{
                    name:{
                        required: "Please enter your name.",
                        minlength: "Your name should be at least 3 characters"
                    },
                    email:{
                        required: "Please enter your email address.",
                        validemail: "Please enter a valid email address."
                    }, 
                    message: {
                        required: "Please write a message.",
                        minlength: "Message should be at least 20 characters long"
                    }
                },
                errorPlacement : function(error, element) {
                    $(element).closest('.form-group').find('.help-block').html(error.html());
                },
                highlight : function(element) {
                    $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                    $(element).closest('.form-group').find('.help-block').html('');
                },
                submitHandler: submitForm
            });
            /* validation */

            /* reset password submit */
            function submitForm(){
                $.ajax({
                    //url: 'index.ajax.php',
                    type: 'POST',
                    data: $('#send-email-form').serialize(),
                    dataType: 'json',
                    beforeSend: function() {
                        $('#btn-send').html('<img src="ajax-loader.gif" style="margin: auto; width:10%;"> &nbsp; Sending...').prop('disabled', true);
                        $('input[type=email],input[type=text],input[type=checkbox],#message').prop('disabled', true);
                    },
                })
                .done(function(data){
                    

                    setTimeout(function(){
                        if (data.status === 'success'){
                            $('#errorDiv').slideDown('fast', function(){
								$('#errorDiv').html('<div class="alert alert-info">'+data.message+'</div>');
								$("#send-email-form").trigger('reset');
								$('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
								$('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Send Mail').prop('disabled', false);
							}).delay(3000).slideUp('fast');
                            setTimeout(' window.location.href = "index.php"; ',3000);
                        }else if (data.status === 'error'){
                            $('#errorDiv').slideDown('fast', function(){
                                $('#errorDiv').html('<div class="alert alert-danger">'+data.message+'</div>');
                                $("#send-email-form").trigger('reset');
                                $('input[type=text],input[type=email],input[type=password]').prop('disabled', false);
                                $('#btn-signup').html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Send Mail').prop('disabled', false);
                          }).delay(3000).slideUp('fast');
                        }else if (data.status === 'unknown'){
                            $('#errorDiv').slideDown('fast', function(){
                                swal("Error!", data.message, "error");
                                $("#send-email-form").trigger('reset');
                                $('input[type=email],input[type=password],input[type=checkbox]').prop('disabled', false);
                                $('#btn-send').html('Reset Password').prop('disabled', false);
                            }).delay(3000).slideUp('fast');
                            $("#back-to-login").slideDown('fast');
                            $("#remember-me").slideDown('fast');
                        }
                    },3000);
                })
                .fail(function(){
                    $("#send-email-form").trigger('reset');
                    alert('An unknown error occoured, Please try again Later...');
                });
            }
            /* reset password submit */
        });

    </script>


    </body>
</html>
