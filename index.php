<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from ennovision.net/dev/html/matmax/assets/Matmax/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 May 2017 10:38:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>e-Campus - Voting system</title>

    <!-- Font Awesome -->
    <link rel="icon" href="img/fav.png" type="image/gif" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,700,900" rel="stylesheet">
    <!--  CSS Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">
    <link href="css/lightslider.css" rel="stylesheet">
    <link href="css/carousel-3d.default.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/switcher/switcher.css" rel="stylesheet">
    <link href="css/switcher/style1.css" rel="stylesheet" id="colors">
    <link href="css/datetimepicker.css" rel="stylesheet" id="colors">

    <script src="css/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!-- Preloader Area Start Here -->
     <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <!-- Preloader Area End Here -->

    <header id="main_heading">
        <div class="container">
            <div class="row">
                <nav class="navbar">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                        <span id="useridspan"></span>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav custom_nav text-right pull-right" id="menuList">
                            <li><a href="index.html" >Home</a>
                            </li>
                            <li><a href="#" onclick="showAjax('','view_cat.html','contentwrapper');">Position</a>
                            </li>
                              <li id="resultMenu"><a href="#" onclick="showAjax('','result.html','contentwrapper');">Result</a> </li>

                               <li><a href="#" onclick="showAjax('','my_votes.html','contentwrapper');">My Votes</a> </li>
                                <li id="reportMenu"><a href="#" onclick="showAjax('','report.html','contentwrapper');">Reports</a> </li>
                                <li  id="setupMenu"><a href="#" onclick="showAjax('','setup.html','contentwrapper');">Setups</a> </li>
                                <li  id="manifestMenu"><a href="#" onclick="showAjax('','manifesto.html','contentwrapper');">Manifesto</a> </li>
                            <li><a href="#" onclick="logOut();" id="logoutlink">Logout</a>
                            </li>
                        </ul>

                    </div>
                </nav>

            </div>
        </div>
    </header>
    <div class="clearfix"></div>



    <!-- Offer Area Start Here -->

    <!-- Offer Area End Here -->

    <!-- Video Area Start Here -->
    <!--<div id="video">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center wow fadeInUp">
                    <h1>Introducing App with Video</h1>
                    <p>Watch video. It's takes 24sec only.</p>
                    <a href="https://www.youtube.com/watch?v=d_YUwnpj8DE" class="fancyvideo" data-fancybox-group="group1"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Video Area End Here -->

    <!-- START APP SCREENSHOT  -->
    <!--<section id="screenshots" class="sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="sec_head">
                        <h3>App <span>Screenshot</span></h3>
                        <span class="sec_line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 wow fadeInUp">
                    <div class="screenshot-carousel" data-carousel-3d>
                        <img src="img/screen/screen-1.png" alt="">
                        <img src="img/screen/screen-2.png" alt="">
                        <img src="img/screen/screen-3.png" alt="">
                        <img src="img/screen/screen-4.png" alt="">
                        <img src="img/screen/screen-5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- END APP SCREENSHOT -->

    <!-- Testimonial_area Start Here-->
   <!-- <div id="testimonial_area" class="sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="sec_head">
                        <h3>App <span>Review</span></h3>
                        <span class="sec_line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 wow fadeInUp">


                    <div id="review_slide">
                        <div class="single-item">
                            <div class="user">
                                <img src="img/team6.jpg" class="img-circle img-responsive" alt="First sample avatar image">
                            </div>

                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>

                            <h4>Anna Deynah</h4>
                            <h5>Founder at ET Company</h5>
                            <div class="review_star">

                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-half-full"> </i>
                            </div>

                        </div>
                        <div class="single-item">
                            <div class="user">
                                <img src="img/team3.jpg" class="img-circle img-responsive" alt="First sample avatar image">
                            </div>

                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>

                            <h4>Anna Deynah</h4>
                            <h5>Founder at ET Company</h5>

                            <div class="review_star">

                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-half-full"> </i>
                            </div>

                        </div>
                        <div class="single-item">
                            <div class="user">
                                <img src="img/team7.jpg" class="img-circle img-responsive" alt="First sample avatar image">
                            </div>

                            <p><i class="fa fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore cum accusamus eveniet molestias voluptatum inventore laboriosam labore sit, aspernatur praesentium iste impedit quidem dolor veniam vel repudiandae excepturi tenetur illo.</p>

                            <h4>Anna Deynah</h4>
                            <h5>Founder at ET Company</h5>

                            <div class="review_star">

                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star"> </i>
                                <i class="fa fa-star-half-full"> </i>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>-->

    <!-- Price Area Start Here -->
    <!--<div id="price" class="sec_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="sec_head">
                        <h3>App <span>Prices</span></h3>
                        <span class="sec_line"></span>
                        <p>All Plans Include a 14 day free trail</p>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-sm-6 col-md-3 wow fadeInLeft">
                    <div class="single_price">
                        <div class="price_top">
                            <h1>Free</h1>
                        </div>
                        <h3>Basic Plan</h3>
                        <ul>
                            <li>5 Team Members</li>
                            <li>6 Month Support</li>
                            <li>10 Pages</li>
                            <li>1 Domain</li>
                            <li>25 GB Storage</li>
                        </ul>
                        <div class="price_bottom">
                            <a href="#" class="price_btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInUp">
                    <div class="single_price">
                        <div class="price_top">
                            <h1> <span>$</span>9.99 <span>/month</span></h1>
                        </div>
                        <h3>PERSONAL</h3>
                        <ul>
                            <li>5 Team Members</li>
                            <li>6 Month Support</li>
                            <li>10 Pages</li>
                            <li>1 Domain</li>
                            <li>25 GB Storage</li>
                        </ul>
                        <div class="price_bottom">
                            <a href="#" class="price_btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInRight">
                    <div class="single_price">
                        <div class="price_top">
                            <h1> <span>$</span>29.99 <span>/month</span></h1>
                        </div>
                        <h3>BUSINESS</h3>
                        <ul>
                            <li>5 Team Members</li>
                            <li>6 Month Support</li>
                            <li>10 Pages</li>
                            <li>1 Domain</li>
                            <li>25 GB Storage</li>
                        </ul>
                        <div class="price_bottom">
                            <a href="#" class="price_btn">Buy Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 wow fadeInRight">
                    <div class="single_price">
                        <div class="price_top">
                            <h1> <span>$</span>59.99 <span>/month</span></h1>
                        </div>
                        <h3>UNLIMITED</h3>
                        <ul>
                            <li>5 Team Members</li>
                            <li>6 Month Support</li>
                            <li>10 Pages</li>
                            <li>1 Domain</li>
                            <li>25 GB Storage</li>
                        </ul>
                        <div class="price_bottom">
                            <a href="#" class="price_btn">Buy Now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>-->

    <!-- Blog Area End Here -->
    <!--<section id="download" class="sec_padding">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="sec_head">
                        <h3>Download Our <span>LatestApp</span></h3>
                        <span class="sec_line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center wow fadeInUp">
                    <div class="download_area">
                        <a href="#" class="btn_download"><i class="fa fa-android"></i>Download Now</a>
                        <a href="#" class="btn_download"><i class="fa fa-apple"></i>Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!--Blog Area Start Here-->


    <!--Contact ARea start Here-->
	<div id="contentwrapper">
	<section class="sec_padding">
    <div id="contact_form" class="sec_padding">

        <div class="container">
            <div class="row contact_area">
                <div class="col-md-7 contact_form wow fadeInUp">
                    <h3>Login Here</h3>
                    <div class="row">
                        <form id="ajax-contact" method="post" action="?" name="registration">
                            <div class="field col-sm-12">
                                <input type="text" placeholder="Username" class="form-control" id="name" name="user" required>
                            </div>

                            <div class="field col-sm-12">
                                <input type="password" placeholder="password" class="form-control" id="email" name="passwd1" required>
                            </div>


                            <div id="form-messages"></div>
                            <div class="field col-sm-6">
                                <button type="button" onclick="showAjax('ajax-contact','includes/ajaxaction.php?Action=chkuser','form-messages')">Sign in</button>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="col-md-5 contact_address">
                    <div class="row">
                        <h3>Instruction</h3>
                        <p>Welcome to the eVoting Platform of the Rivers State University powered by Cinfores Limited. Students are to use this platform to elect their representative.</p>
<p>Note: Students are to login using their eCampus Username and Password.
Double voting is not allowed on this platform.
To Vote:  Click on the name of any Position. The list of all candidates will appear with a Vote Now and Manifesto Button Under the candidates Name and Position
Click Vote Now and Click Ok.</p>
                        <!--<ul>
                            <li><i class="fa fa-phone"></i>
                                instruction one
                            </li>
                            <li><i class="fa fa-envelope"></i>
                                instruction two
                            </li>
                            <li><i class="fa fa-map-pin"></i>
                              instruction three <br/>
New York City, USA
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
	</section>
	</div>
    <!--Subcribe Area start Here-->
    <div id="subscribe" class="sec_padding">
        <div class="overlay"></div>
        <div class="container">
            <!--<div class="row">
                <div class="col-md-12 wow fadeInUp">
                    <div class="sec_head">
                        <h3>Subscribe Our <span>Newsletter</span></h3>
                        <span class="sec_line"></span>
                    </div>
                </div>
            </div>-->
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <!--<form class="text-center form-inline">
                        <input class="mb-20 wow fadeInLeft form-control" name="email" placeholder="Your Email Address">
                        <button class="sub_btn">subscribe</button>
                    </form>-->
                    <!--<ul class="socialList">
                        <li><a href="#"><i class="fa fa-facebook"></i><span class="hidden-xs"> Facebook </span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-twitter"></i><span class="hidden-xs">Twitter</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-linkedin"></i><span class="hidden-xs">Linkedin</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-dribbble"></i><span class="hidden-xs">dribbble</span></a>
                        </li>
                        <li><a href="#"><i class="fa fa-github"></i><span class="hidden-xs">github</span></a>
                        </li>
                    </ul>-->
                    <div class="copyright text-center">
                        <p>Copyright &copy; All Right Reserved 2017</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- STYLE SWITCHER -->
    <!--<div id="style-switcher">
        <h2>Choose Your Color<a href="#"><i class="fa fa-cog fa-spin"></i></a></h2>
        <div>
            <ul class="colors" id="color1">
                <li>
                    <a href="#" class="style1"></a>
                </li>
                <li>
                    <a href="#" class="style2"></a>
                </li>
                <li>
                    <a href="#" class="style3"></a>
                </li>
                <li>
                    <a href="#" class="style4"></a>
                </li>
                <li>
                    <a href="#" class="style5"></a>
                </li>
                <li>
                    <a href="#" class="style6"></a>
                </li>
                <li>
                    <a href="#" class="style7"></a>
                </li>
                <li>
                    <a href="#" class="style8"></a>
                </li>
            </ul>
        </div>
    </div>-->
    <!-- END OF STYLE SWITCHER -->

    <!-- Back to Top-->
    <a id="back-top" class="back-to-top page-scroll" href="#main">
        <i class="fa fa-arrow-up"></i>
    </a>
    <!-- Back to Top-->

    <!-- All Javascript Link -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script type="text/javascript" src="js/jquery.resize.ex.js"></script>
    <script type="text/javascript" src="js/waitforimages.js"></script>
    <script type="text/javascript" src="js/jquery.carousel-3d.min.js"></script>
    <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="js/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="js/switcher.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
    <script type="text/javascript" src="js/moments.js"></script>
    <script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>

	<script type="text/javascript" src="includes/jQryfile.js"></script>
    <!-- All Javascript Link -->

</body>


<script>
$(document).ready(function(){
    //alert(getItem('spage'));
    var userid = getItem('userid');
    var spage = getItem('spage');
    if(getItem('userid') == null){
        $("#menuList").hide();
        //alert("NO USERID :"+userid);
    }else{
        $("#menuList").show();
        $("#useridspan").html(userid);
        if(getItem('spage') != "ADMIN"){
            $("#reportMenu").hide();
            $("#resultMenu").hide();
            $("#setupMenu").hide();
            $("#manifestMenu").hide();
        }
        showAjax('','view_cat.html','contentwrapper');

    }

});

    function logOut(){
        removeItem("userid");
        removeItem("entryno");
        removeItem("spage");
        removeItem("sdate");
        removeItem("edate");
        location.href="index.html";
    }

    function goVoting(cat){
        setItem("position",cat);

        showAjax("","voting.html","contentwrapper");
    }

    function doVoting(cat, cmatric_no,election){
        var r = confirm("Confirm Your Vote!");
            if (r == true) {
                var votersid = getItem("userid");
        var ventryno = getItem("entryno");
showAjax("","includes/ajaxaction.php?Action=vote&c="+cmatric_no+"&p="+cat+"&vuserid="+votersid+"&ventryno="+ventryno+"&election="+election,"processDiv");
            } else {

            }

    }

    function viewProfile(title, desc){
        //alert($title);
        var manifesto = desc.replace(/~/gi, " ");
        //var manifesto = document.createTextNode(desc);
        $('#mtitle').html(title+" Manifesto");
        //$('#mbody').html(manifesto);
        $('#myModal').modal('show');
    }

</script>
</html>
