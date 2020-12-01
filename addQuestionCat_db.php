<?php
session_start();
require_once('config.php');
$CName = $_GET['name'];
$reg = "INSERT INTO question_category( IncDesc, QuestionId, CustomerId, ExpertId) VALUES ('$Ans', '$QID', '$CID', '$EID');";
if (mysqli_query($con, $reg)) {
    $Msg = "Data Save";
} else {
    $Msg = "Data Not Save";
}
echo 
    "<script type='text/javascript'>
    alert('$Msg');
    window.location.href = 'login_form.php';
    </script>"
?>