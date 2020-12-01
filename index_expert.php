<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    <meta charset="utf-8">

    <script src='https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.4/sweetalert2.all.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

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
    <!-- =-=-=-=-=-=-= Google Fonts =-=-=-=-=-=-= -->
    <!-- <link href="../../../fonts.googleapis.com/cssd7e8.css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic|Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css"> -->
    <!-- =-=-=-=-=-=-= Owl carousel =-=-=-=-=-=-= -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/owl.style.css">
    <!-- =-=-=-=-=-=-= Highliter Css =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="css/styles/shCoreDefault.css" />
    <!-- =-=-=-=-=-=-= Css Animation =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="css/animate.min.css" />
    <!-- =-=-=-=-=-=-= Hover Dropdown =-=-=-=-=-=-= -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap-dropdownhover.min.css" />
    <!-- JavaScripts -->
    <script src="js/modernizr.js"></script>


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
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
                        <li class="hidden-xs">
                            <a href="contact.php">Contact Us</a>
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
                                    if (isset($_SESSION['UserType']) && $_SESSION['UserType']=="Expert") {
                                        $ID = $_SESSION['Id'];
                                        echo $ID;
                                        $s = "SELECT * FROM expert WHERE Id= '$ID';";
                                        $result = mysqli_query($con, $s);
                                        $num = mysqli_num_rows($result);
                                        if ($num == 1) {
                                            $r = $result->fetch_assoc();
                                        } else {
                                            echo
                                                "<script type='text/javascript'>
                                                alert('Session Expired Login Again !!');
                                                window.location.href = 'login_form.php';
                                            </script>";
                                        }
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
                                <li><a href="profile_setting_expert.php"><i class=" icon-gears"></i> Profile Setting</a></li>
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
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- logo -->
                <a href="index.php" class="navbar-brand">
                    <img class="img-responsive" alt="" src="images/logo.png">
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
                        <div class="btn-nav">
                            <p href="" class="btn btn-primary btn-small navbar-btn">EXPERT HOME</a>
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
        <!-- =-=-=-=-=-=-= Latest Questions  =-=-=-=-=-=-= -->
        <section class="white question-tabs padding-bottom-80" id="latest-post">
            <div class="container">
                <div class="row">
                    <!-- Content Area Bar -->
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs">
                                    <li class="active"> <a data-toggle="tab" href="#tab1"><i class="icofont icon-ribbon"></i><span class="hidden-xs">Unanswered Questions</span></a>
                                    </li>
                                    <li> <a data-toggle="tab" href="#tab2"><i class="icofont icon-layers"></i><span class="hidden-xs">Answered Questions</span></a>
                                    </li>
                                    <li> <a data-toggle="tab" href="#tab3"><i class="icofont icon-layers"></i><span class="hidden-xs">Incident Raised</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="tab1" class="tab-pane active">

                                    <div class="container">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h2> Questions For You</b></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Your Answer</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    require_once('config.php');
                                                    $CID = $r["CategoryId"];
                                                    $SCID = $r["SubCategoryId"];
                                                    $Q = "SELECT * FROM question WHERE CategoryId='$CID' and SubCategoryId='$SCID';";
                                                    $R = mysqli_query($con, $Q);
                                                    $i = 0;
                                                    while ($I = mysqli_fetch_array($R)) {
                                                        echo
                                                            '<tr>' .
                                                                '<td>' . $I["QuestionTitle"] . '</td>' .
                                                                '<td>' . $I["QuestionDesc"] . '</td>' .
                                                                '<td>' .
                                                                '<form action="AnswerQuestion.php" method="POST">' .
                                                                '<input type="hidden" name="questionId" value="' . $I["Id"] . '"/>' .
                                                                '<input type="hidden" name="expertId" value="' . $ID . '"/>' .
                                                                '<textarea rows="4" cols="50" name="ans"></textarea>' .
                                                                '</td>' .
                                                                '<td>' .
                                                                '<input type="submit" value="Submit Your Answer" />' .
                                                                '<input type="hidden" id="hid_ques_id' . $I["Id"] . '" value="' . $I["Id"] . '" />' .
                                                                '</form>' .
                                                                '<button id="myBtn' . $I["Id"] . '" onclick="openMyDialog(' . $I["Id"] . ')">Raise Complaint</button>' .
                                                                '</td>' .
                                                                '</tr>';
                                                        $i += 1;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="clearfix">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- The Modal -->
                                    <center>
                                        <div id="myModal" class="modal">

                                            <!-- Modal content -->
                                            <div class="modal-content">
                                                <span class="close">&times;</span>
                                                <form >
                                                <table>
                                                    <tr>
                                                        <td>
                                                            <center><b>Enter Complaint Description : </b></center>
                                                        </td>
                                                    </tr>
                                                    <tr class="blank_row">
                                                        <td bgcolor="#FFFFFF">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <!-- <?php
                                                            echo '
                                                            <input type="hidden" name="questionId" value="' . $I["Id"] . '"/>
                                                            <input type="hidden" name="expertId" value="' . $_SESSION["Id"] . '"/>
                                                            ' 
                                                            ?> -->
                                                            <textarea id="incDesc" name="incDesc" cols="40" rows="5"></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr class="blank_row">
                                                        <td bgcolor="#FFFFFF">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <center><button type="submit" id="btnRaise" class="btn btn-danger" onclick="addComplaint()">Post Complaint</button></center>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>

                                        </div>
                                    </center>

                                    <script>
                                        // Get the modal
                                        var modal = document.getElementById('myModal');

                                        // Get the button that posts complaint
                                        var btnRaise = document.getElementById("btnRaise");

                                        // Get the <span> element that closes the modal
                                        var span = document.getElementsByClassName("close")[0];

                                        var questionid = 0;

                                        // When the user clicks the button, open the modal 
                                        function openMyDialog(id) {
                                            modal.style.display = "block";
                                            questionid = id;
                                        }

                                        function addComplaint() {

                                            var incDesc = document.getElementById("incDesc").value;

                                            var url = "AddComplaintByExpert.php?questionId=" + questionid + "&incDesc=" + incDesc;

                                            modal.style.display = "none";

                                            if (window.XMLHttpRequest) {
                                                request = new XMLHttpRequest();
                                            } else if (window.ActiveXObject) {
                                                request = new ActiveXObject("Microsoft.XMLHTTP");
                                            }
                                            try {
                                                request.onreadystatechange = getComplainResponse;
                                                request.open("GET", url, true);
                                                request.send();
                                            } catch (e) {
                                                alert("Unable to connect to server");
                                            }
                                        }


                                        function getComplainResponse() {
                                            if (request.readyState == 4) {
                                                var val = request.responseText;
                                                if (val.trim() == "Success") {
                                                    alert("Your complaint has been raised");
                                                    window.location.reload(true);
                                                } else {
                                                    alert(val);
                                                    alert("Your complaint has not been raised");
                                                }
                                            }
                                        }

                                        // When the user clicks on <span> (x), close the modal
                                        span.onclick = function() {
                                            modal.style.display = "none";
                                            alert(questionid);
                                        }

                                        // When the user clicks anywhere outside of the modal, close it
                                        window.onclick = function(event) {
                                            if (event.target == modal) {
                                                modal.style.display = "none";
                                            }
                                        }
                                    </script>
                                    <!-- Question Listing End -->
                                </div>
                                <div id="tab2" class="tab-pane">
                                    <!-- Question Listing -->
                                    <div class="container">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h2> Answers Posted By You</b></h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Question Title</th>
                                                        <th>Question Description</th>
                                                        <th>Your Answer</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    require_once('config.php');
                                                    $ID = $_SESSION['Id'];
                                                    $Q = "SELECT * FROM answer WHERE ExpertId='$ID';";
                                                    $R = mysqli_query($con, $Q);
                                                    $i = 0;
                                                    while ($I = mysqli_fetch_array($R)) {
                                                        $QID = $I['QuestionId'];
                                                        $A = "SELECT * FROM question WHERE Id ='$QID';";
                                                        $A = mysqli_query($con, $A);
                                                        $j = 0;
                                                        while ($J = mysqli_fetch_array($A)) {
                                                            echo
                                                                "<tr>" .
                                                                    "<td>" . $J["QuestionTitle"] . "</td>" .
                                                                    "<td>" . $J["QuestionDesc"] . "</td>" .
                                                                    "<td>" . $I["AnsDesc"] . "</td>" .
                                                                    "</tr>";
                                                            $j == 1;
                                                        }
                                                        $i += 1;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="clearfix">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Question Listing End -->
                                <div id="tab3" class="tab-pane">
                                    <!-- Question Listing -->
                                    <div class="container">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <h2><b>Incident Raised</b></h2><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Customer Id</th>
                                                        <th>Question Title</th>
                                                        <th>Question Description</th>
                                                        <th>Description of Incident</th>
                                                        <th>Posted Date of Incident</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    require_once('config.php');
                                                    $ID = $_SESSION['Id'];
                                                    $Q = "SELECT * FROM reported_incident_by_experts WHERE ExpertId='$ID';";
                                                    $R = mysqli_query($con, $Q);
                                                    $i = 0;
                                                    while ($I = mysqli_fetch_array($R)) {
                                                        $QID = $I['QuestionId'];
                                                        $A = "SELECT * FROM question WHERE Id ='$QID';";
                                                        $A = mysqli_query($con, $A);
                                                        $j = 0;
                                                        while ($J = mysqli_fetch_array($A)) {
                                                            echo
                                                                "<tr>" .
                                                                    "<td>" . $I["CustomerId"] . "</td>" .
                                                                    "<td>" . $J["QuestionTitle"] . "</td>" .
                                                                    "<td>" . $J["QuestionDesc"] . "</td>" .
                                                                    "<td>" . $I["IncDesc"] . "</td>" .
                                                                    "<td>" . $I["PostedDate"] . "</td>" .
                                                                    "</tr>";
                                                            $j == 1;
                                                        }
                                                        $i += 1;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <div class="clearfix">
                                                <ul class="pagination">
                                                    <li class="page-item disabled"><a href="#">Previous</a></li>
                                                    <li class="page-item active"><a href="#" class="page-link">1</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                    <li class="page-item "><a href="#" class="page-link">3</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
    </div>
    <!-- end container -->
    </section>

    </section>
    <!-- =-=-=-=-=-=-= Blog & News end =-=-=-=-=-=-= -->
    <!-- =-=-=-=-=-=-= Testimonials =-=-=-=-=-=-= -->
    <section data-stellar-background-ratio="0.1" class="testimonial-bg parallex">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <!-- Blog Grid -->
                <div class="col-md-8 ">
                    <div id="owl-slider" class="happy-client">
                        <div class="item"> <i class="fa fa-quote-left"> </i>
                            <p>Expert Messaging System is a question and answer site for professional and enthusiasts. It features questions and answers on a wide variety of topics ranging from music , sports , business , art , cookery , health etc. The website serves as a platform for users to ask questions and assigned experts for the topics to answer those questions.</p>
                            <div class="client-info-wrap clearfix">
                                <div class="client-img">
                                    <!--img class="img-circle" src="../../../theemon.com/d/designagency/LivePreview/assets/images/client-img-two.jpg" alt="" /-->
                                </div>
                                <div class="client-info"> <strong>Expert Messaging</strong>
                                </div>
                            </div>
                        </div>
                        <div class="item"> <i class="fa fa-quote-left"> </i>
                            <p>Expert Messaging System is a question and answer site for professional and enthusiasts. It features questions and answers on a wide variety of topics ranging from music , sports , business , art , cookery , health etc. The website serves as a platform for users to ask questions and assigned experts for the topics to answer those questions.</p>
                            <div class="client-info-wrap clearfix">
                                <div class="client-img">
                                    <!--img class="img-circle" src="../../../theemon.com/d/designagency/LivePreview/assets/images/client-img-two.jpg" alt="" /-->
                                </div>
                                <div class="client-info"> <strong>Expert Messaging</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Grid -->
                <!-- Blog Grid -->
                <div class="col-md-4 no-padding">
                    <div class="success-stories">
                        <div class="main-heading text-center">
                            <h2>Admin Detail</h2>
                            <hr class="main">
                            <p><Strong>Email-</strong>ektadiwakar536@gmail.com<br><Strong>Contact-</Strong>8120023700</p>
                        </div>
                    </div>
                </div>
                <!-- Blog Grid -->
                <div class="clearfix"></div>
            </div>
            <!-- Row End -->
        </div>
        <!-- end container -->
    </section>

    </div>

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