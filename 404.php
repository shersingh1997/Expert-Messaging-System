<?php
session_start();
?>
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
            <!--li class="hidden-xs"><a href="blog.php">Blog</a>
					</li//-->
            <li class="hidden-xs"><a href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <!-- <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
          <ul class="top-nav nav-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
                <img class="img-circle resize" alt="" src="images/authors/13.png">
                <span class="hidden-xs small-padding">
                  <?php
                  if (isset($_SESSION['Id'])) {
                    echo $_SESSION['Id'];
                  } else {
                    echo
                      "<script type='text/javascript'>
                        alert('Session Expired Login Again !!');
                        window.location.href = 'login_form.php';
                      </script>";
                  }
                  ?>
                  <i class="fa fa-caret-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu ">
                <li><a href="profile-setting.php"><i class=" icon-gears"></i> Profile Setting</a></li>
                <li><a href="question-list.php"><i class="icon-heart"></i> Questions</a></li>
                <li><a href="#"><i class="icon-lock"></i> Logout</a></li>
              </ul>
            </li>
          </ul>
        </div> -->
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
              <li><a href="index.php">Home </a>
              </li>
              <li><a href="question-detail.php">Question Detail</a>
              </li>
              <li><a href="404.php">Error Page</a>
              </li>
              <li><a href="contact.php">Contact Us</a>
              </li>
            </ul>
          </li>
          <li>
            <div class="btn-nav"><a href="post-question.php" class="btn btn-primary btn-small navbar-btn">Post Question</a>
            </div>
          </li>
        </ul>
      </div>
      <!-- navigation menu end -->
      <!--/.navbar-collapse -->
    </div>
  </div>
  <!-- HEADER Navigation End -->

  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->

    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Page Not Found</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">404</li>
              </ol>
            </div>
            <!-- end bread -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= Page Breadcrumb End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Error  =-=-=-=-=-=-= -->
    <section class="error-page white section-padding" id="error-page">
      <div class="container">
        <div class="row">

          <div class="col-md-8 col-sm-7 col-xs-12 text-left">
            <div class="error-grid left-align-text">
              <h2 class="uppercase">Oops... Page Not Found!</h2>
              <p>Sorry the Page Could not be Found here. Try using the button below to go to main page of the site</p>

              <div class="error-search">
                <form action="http://templates.scriptsbundle.com/knowledge/demo/index.php" method="get">
                  <input type="text" class="error-input">
                  <input type="submit" class="btn  btn-primary" value="Search" name="Search">
                </form>
              </div>
            </div>
          </div>
          <!--end item-->

          <div class="col-md-4 col-sm-5 col-xs-12 bottom-margin">
            <br>
            <h1 class="uppercase error-title-big text-blue">404</h1>
          </div>
          <!--end item-->

        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Error  End =-=-=-=-=-=-= -->
  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->
  <!-- =-=-=-=-=-=-= FOOTER =-=-=-=-=-=-= -->
  <footer class="footer-area">


    <!--Footer Bottom-->
    <div class="footer-copyright">
      <div class="auto-container clearfix">
        <!--Copyright-->
        <div class="copyright text-center">Copyright 2019 &copy; Theme Created By <a>Ypslison IT Solution</a> All Rights Reserved</div>
      </div>
    </div>
  </footer>
  <!-- =-=-=-=-=-=-= JQUERY =-=-=-=-=-=-= -->

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


<!-- Mirrored from templates.scriptsbundle.com/knowledge/demo/404.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 07:35:35 GMT -->

</html>