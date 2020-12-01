<?php
    session_start();
    require_once ('config.php');
    $Id=$_POST['id'];
    $Pass=$_POST['password'];
    $CID=$_POST['categoryID'];
    $SID=$_POST['subCategoryID'];
    $reg="INSERT INTO expert VALUES ('$Id', '$Pass', '$CID', '$SID', 0);";
    if(mysqli_query($con,$reg)){
		$message = "Expert Registration Successfully";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'login_form.php';
        </script>";
    }
    else{
		$message = "Expert Registration Faild";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'registerexpert.php';
        </script>";
    }
?>