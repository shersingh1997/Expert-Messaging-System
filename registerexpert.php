<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" content="ScriptsBundle">
  <title>Expert Solution</title>
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
  <!-- =-=-=-=-=-=-= Highliter Css =-=-=-=-=-=-= -->
  <link type="text/css" rel="Stylesheet" href="css/styles/shCoreDefault.css" />
  <!-- =-=-=-=-=-=-= Css Animation =-=-=-=-=-=-= -->
  <link type="text/css" rel="stylesheet" href="css/animate.min.css" />
  <!-- =-=-=-=-=-=-= Hover Dropdown =-=-=-=-=-=-= -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap-dropdownhover.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <!-- JavaScripts -->
  <script src="js/modernizr.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      // detect change of dropdown
      $("#qcat").change(function() {
        // get id of selected team
        var catid = $(this).find(':selected').val();
        // set json url
        var json_url = "GetSubCategoryJson.php?catid=" + catid;
        $("#subcat").empty();
        // get json data
        jQuery.getJSON(json_url, function(data) {
          // put new dropdown values to players dropdown
          for( var i in data){
              var obj = data[i];
              $("#subcat").append("<option value='" + obj.id + "'>" + obj.subCategoryName + "</option>")
          }
        });
      });
    });
  </script>
</head>

<body>
  <!-- =-=-=-=-=-=-= PRELOADER =-=-=-=-=-=-= -->
  <div class="preloader">
    <span class="preloader-gif"></span>
  </div>
  <!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
          <ul class="top-nav nav-left">
            <li>
              <a href="index.html">Home</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
          <ul class="top-nav nav-right">
            <li class="dropdown">
              <a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
                <img class="img-circle resize" alt="" src="images/authors/13.png">
                <span class="hidden-xs small-padding">
                  <span>More Option</span>
                  <i class="fa fa-caret-down"></i>
                </span>
              </a>
              <ul class="dropdown-menu ">
                <li><a href="#"><i class="icon-lock"></i> Logout</a></li>
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
      <!-- logo -->
      <a href="index.html" class="navbar-brand"><img class="img-responsive" alt="" src="images/logo.png">
      </a>
    </div>
  </div>
  <!-- HEADER Navigation End -->

  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">
    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-8 co-xs-15">
            <center>
              <h1><b>
                  <font style="font-size:20">Expert Registration</font>
                </b></h1>
            </center>
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= Page Breadcrumb End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Register Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="register">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">

            <div class="box-panel">

              <form action="registerexpert_db.php" method="POST">

                <div class="form-group">
                  <label>Email</label>
                  <input type="text" placeholder="Expert's Email ID" name="id" class="form-control">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="text" placeholder="Expert's Password" name="password" class="form-control">
                </div>
                <div class="form-group">
                  <label>Category ID</label>
                  <select id="qcat" class="questions-category form-control" name="categoryID">
                    <option value="0">Select Category</option>
                    <?php
                    require_once('config.php');
                    $Q = "SELECT * FROM question_category;";
                    $R = mysqli_query($con, $Q);
                    $i = 0;
                    while ($I = mysqli_fetch_array($R)) {
                      echo
                        '<option value="' . $I["Id"]  . '">' .
                          $I["CategoryName"] .
                          '</option>';
                      $i += 1;
                    }
                    ?>
                  </select>
                </div>

                <div class="form-group">
                  <label>SubCategory ID</label>
                  <select id="subcat" class="questions-category form-control" name="subCategoryID">
                    <option>Select SubCategory</option>
                  </select>
                </div>
                <button class="btn btn-primary btn-lg btn-block">Create Account</button>
              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>

    <!--Footer Bottom-->
    <div class="footer-copyright">
      <div class="auto-container clearfix">
        <!--Copyright-->
        <div class="copyright text-center">Copyright 2019 &copy; Theme Created By <a>Ypslison IT Solution</a> All Rights
          Reserved</div>
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