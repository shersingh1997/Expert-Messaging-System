<?php
    session_start();
    require_once ('config.php');
    $Id=$_POST['id'];
    $Pass=$_POST['password'];
    $s="SELECT * FROM customer WHERE Id= '$Id' && Password='$Pass'";
    $result=mysqli_query($con,$s);
    $num=mysqli_num_rows($result);
    if($num==1) {
        $r = $result->fetch_assoc();
        $_SESSION['UserType']="Customer";
        $_SESSION['Id']=$r["Id"];
        $_SESSION['CustomerName']=$r["FirstName"];
        $message = "Login Successfully";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'index_customer.php';
        </script>";
    }
    else {
        $message = "Invalid Information !!";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'login_form.php';
        </script>";
    }
?>