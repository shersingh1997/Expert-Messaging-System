<?php
    session_start();
    require_once ('config.php');
    $Id=$_SESSION['ExpertId'];
    $CID=$_POST['categoryID'];
    $SCID= $_POST['subCategoryID'];
    $Pass=$_POST['password'];
    $reg="UPDATE expert 
    SET CategoryId='$CID',
    SubCategoryId='$SCID', Password='$Pass' WHERE Id='$Id'";
    if(mysqli_query($con,$reg)){
		$message = "You have been successfully updated with ExpertMessaging";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'index_expert.php';
        </script>";
    }
    else{
		$message = "Not updated,something is wrong!!!";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'profile_setting_expert.php';
        </script>";
    }
?>