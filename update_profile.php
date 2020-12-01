<?php
    session_start();
    require_once ('config.php');
    $Id=$_POST['id'];
    $FName=$_POST['firstName'];
    $LName=$_POST['lastName'];
    $Mobile=$_POST['mobileNumber'];
    $Pass=$_POST['password'];
    $reg="UPDATE customer 
    SET FirstName='$FName', LastName='$LName',
    MobileNumber='$Mobile', Password='$Pass' WHERE Id='$Id'";
    if(mysqli_query($con,$reg)){
		$message = "You have been successfully updated with ExpertMessaging";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'profile-setting.php';
        </script>";
    }
    else{
		$message = "Not updated,something is wrong!!!";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'profile-setting.php';
        </script>";
    }
?>