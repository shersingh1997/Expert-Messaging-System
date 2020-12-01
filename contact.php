<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="ScriptsBundle">
  <title>Expert messaging</title>
  <!-- =-=-=-=-=-=-= Favicons Icon =-=-=-=-=-=-= -->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
  <!-- =-=-=-=-=-=-= Mobile Specific =-=-=-=-=-=-= -->
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
  <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- =-=-=-=-=-=-= Template CSS Style =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/style.css">
  <!-- =-=-=-=-=-=-= Font Awesome =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/font-awesome.css">
  <!-- =-=-=-=-=-=-= Et Line Fonts =-=-=-=-=-=-= -->
  <link rel="stylesheet" href="css/et-line-fonts.css">
  <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="css/owl.style.css">
  <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
  <link href="../../../fonts.googleapis.com/cssd7e8.css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css">
  <!-- =-=-=-=-=-=-= Highliter Css =-=-=-=-=-=-= -->
  <link type="text/css" rel="Stylesheet" href="css/styles/shCoreDefault.css" />
  <!-- =-=-=-=-=-=-= Css Animation =-=-=-=-=-=-= -->
  <link type="text/css" rel="stylesheet" href="css/animate.min.css" />
  <!-- =-=-=-=-=-=-= Hover Dropdown =-=-=-=-=-=-= -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap-dropdownhover.min.css" />
  <!-- JavaScripts -->
  <script src="js/modernizr.js"></script>
</head>

<body>
  <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
  <div class="preloader"><span class="preloader-gif"></span>
  </div>
  <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
          <ul class="top-nav nav-left">
            <li><a href="index.php">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- =-=-=-=-=-=-= HEADER Navigation =-=-=-=-=-=-= -->
  <div class="navbar navbar-default">
    <div class="container">
      <!-- header -->
      <div class="navbar-header">
        <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- logo -->
        <a href="index.php" class="navbar-brand"><img class="img-responsive" alt="" src="images/logo.png">
        </a>
        <!-- header end -->
      </div>
      <!-- navigation menu -->
      <div class="navbar-collapse collapse">
        <!-- right bar -->
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"> <a class="dropdown-toggle " data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">Pages <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="404.php">Error Page</a>
              </li>
            </ul>
          </li>
          <li>
            <div class="btn-nav"><a href="#" class="btn btn-primary btn-small navbar-btn">Contact Us</a>
            </div>
          </li>
        </ul>
      </div>
      <!-- navigation menu end -->
      <!--/.navbar-collapse -->
    </div>
  </div>
  <!-- HEADER Navigation End -->

  <!-- =-=-=-=-=-=-= Page Breadcrumb End =-=-=-=-=-=-= -->

  <!-- =-=-=-=-=-=-= Contact Us  =-=-=-=-=-=-= -->
  <section class="section-padding-80 white contact-us" id="contacts">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-8 col-xs-12">

          <h2>Send a Message</h2>

          <form id="contactForm" method="post" action="#">
            <div class="row">
              <div class="col-lg-6 formmargin">

                <div class="form-group">
                  <input type="text" placeholder="Name" id="name" name="name" class="form-control" required>

                </div>

                <div class="form-group">
                  <input type="email" placeholder="Email" id="email" name="email" class="form-control" required>

                </div>

                <div class="form-group">
                  <input type="text" placeholder="Subject" id="subject" name="subject" class="form-control" required>
                </div>

              </div>
              <div class="col-lg-5">
                <div class="form-group">
                  <textarea cols="6" rows="6" placeholder="Message..." id="message" name="message" class="form-control" required></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <button id="yes" class="btn btn-primary" type="submit">Send Message</button>

              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4 col-sm-4 col-xs-12 contact-detail">

          <h2>Contact Details</h2>

          <div class="contact-info">
            <div class="follow"><b>Address:</b>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-map-marker"></i> Universal Informatics,Race Course Road, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Opp. IDA Building,
              Indore - 452003</div><br>
            <div class="follow"><b>Phone:</b>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i> 7471128436, 747112837</div><br>
            <div class="follow"><b>Email:</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://universalinformatics.com"><i class="fa fa-envelope-o"></i>&nbsp; universalinfomatics</a></div><br>
            
          </div>
          <!-- end links -->

        </div>

        <div class="clearfix"></div>
      </div>
    </div>
    <!-- end container -->
  </section>
  <!-- =-=-=-=-=-=-= Contact Us End =-=-=-=-=-=-= -->

  <!--Footer Bottom-->
  <div class="footer-copyright">
    <div class="auto-container clearfix">
      <!--Copyright-->
      <div class="copyright text-center">Copyright 2019 &copy; Theme Created By <a>Ypslison IT Solution</a> All Rights Reserved</div>
    </div>
  </div>
  </footer>

  <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap Core Css  -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Jquery Smooth Scroll  -->
  <script src="js/jquery.smoothscroll.js"></script>
  <!-- Jquery Easing -->
  <script type="text/javascript" src="js/easing.js"></script>
  <!-- Jquery Counter -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Jquery Waypoints -->
  <script src="js/jquery.waypoints.js"></script>
  <!-- Jquery Appear Plugin -->
  <script src="js/jquery.appear.min.js"></script>
  <!-- Carousel Slider  -->
  <script src="js/carousel.min.js"></script>
  <!-- Jquery Parallex -->
  <script src="js/jquery.stellar.min.js"></script>
  <!--Style Switcher -->
  <script src="js/bootstrap-dropdownhover.min.js"></script>
  <!-- Include jQuery Syntax Highlighter -->
  <script type="text/javascript" src="scripts/shCore.js"></script>
  <script type="text/javascript" src="scripts/shBrushPhp.js"></script>
  <!-- Template Core JS -->
  <script src="js/custom.js"></script>
</body>
</html>