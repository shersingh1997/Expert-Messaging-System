<?php
    session_start();
    require_once ('config.php');
    $Id=$_POST['id'];
    $FName=$_POST['firstName'];
    $LName=$_POST['lastName'];
    $Mobile=$_POST['mobileNumber'];
    $Pass=$_POST['password'];
    $reg="insert into customer values(
        '$Id','$FName','$LName', '$Mobile','$Pass', 0, 0)";
    if(mysqli_query($con,$reg)){
		$message = "Customer Registration Successfully";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'login_form.html';
        </script>";
    }
    else{
		$message = "Customer Registration Faild";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'register.html';
        </script>";
    }
?>