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
            <li class="hidden-xs"><a href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
          <ul class="top-nav nav-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
                <img class="img-circle resize" alt="" src="images/authors/13.png">
                <span style="text-transform: lowercase" class="hidden-xs small-padding">
                  <?php
													require_once('config.php');
                  if (isset($_SESSION['CustomerId'])) {
                    $CID = $_SESSION['CustomerId'];
                    echo $_SESSION['CustomerName'];

                    $s="SELECT * FROM customer WHERE Id= '$CID';";
                    $result=mysqli_query($con,$s);
                    $num=mysqli_num_rows($result);
                    if($num==1) {
                        $r = $result->fetch_assoc();
                    }else {
                      session_destroy();
                      echo
                        "<script type='text/javascript'>
                        alert('Session Expired Login Again !!');
                        window.location.href = 'login_form.php';
                        </script>";
                    }
                  } else {
                    session_destroy();
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
                <li><a href="logout.php"><i class="icon-lock"></i> Logout</a></li>
              </ul>
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
    <!-- =-=-=-=-=-=-= User Profile =-=-=-=-=-=-= -->
    <section id="user-profile" class="user-profile parallex">
      <div class="container">
        <!-- Row -->
        <div class="row">

          <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="profile-sec ">
              <div class="profile-head">
                <div class="col-md-6 col-xs-12 col-sm-8 no-padding">
                  <div class="profile-avatar">
                    <!--span><img class="img-responsive img-circle" alt="" src="images/authors/author-large.jpg"></span-->
                    <div class="profile-name">
                      <h3>Customer Profile</h3>
                      <i>Expert Mesaaging System</i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Profile Sec -->
          </div>

        </div>
        <!-- Row End -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= User Profile end =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= User Form Settings =-=-=-=-=-=-= -->
    <section class="section-padding-80" id="login">
      <div class="container">
        <div class="row">

          <div class="col" style="margin: auto; max-width: 800px; width:85%">

            <div class="box-panel" >

              <!-- form login -->
              <form action="update_profile.php" method="post">
                <input type="hidden" value="<?php echo $r['Id']?>" name="id">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Enter your Password" value="<?php echo $r['Password']?>" name="password" class="form-control" id="myInput"><br>
                  <input type="checkbox" onclick="myFunction()"> Show Password
                </div>
                <div class="form-group">
                  <label>First Name</label>
                  <input type="text" placeholder="Enter your first name" value="<?php echo $r['FirstName']?>" name="firstName" class="form-control">
                </div>
                <div class="form-group">
                  <label>Last Name</label>
                  <input type="text" placeholder="Enter your last name" value="<?php echo $r['LastName']?>" name="lastName" class="form-control">
                </div>
                <div class="form-group">
                  <label>Mobile Number</label>
                  <input type="text" placeholder="Enter your Mobile Number" value="<?php echo $r['MobileNumber']?>" name="mobileNumber" class="form-control">
                </div>
                <div>
                  <center><button type="submit" class="btn btn-primary btn-lg"> Update My Profile</button></center>
                </div>
              </form>

              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>

    <script>
      function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    </script>

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