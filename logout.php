<?php
    session_start();
    echo "
        <script type='text/javascript'>
            alert('Logout Successfully');
            window.location.href = 'index.php';
        </script>";  
    session_destroy();
?>