<?php
session_start();
require_once('config.php');
$Ans = $_GET['incDesc'];
$QID = $_GET['questionId'];
$ansID = $_GET['ansId'];
$Q = "SELECT * FROM answer Where Id = '$ansID'";
$r = mysqli_query($con, $Q);
$Q = $r->fetch_assoc();
$ID = $Q["ExpertId"];
$CID = $_SESSION['Id'];
$reg = "INSERT INTO reported_incident_by_customer(IncDesc, QuestionId, CustomerId, ExpertId) VALUES ('$Ans', '$QID', '$CID', '$EID');";
if (mysqli_query($con, $reg)) {
    echo "Success";
} else {
    echo "Error";
}
?>