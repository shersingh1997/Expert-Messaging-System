<?php
session_start();
require_once('config.php');
$Ans = $_GET['incDesc'];
$QID = $_GET['questionId'];
$EID = $_SESSION['Id'];
$Q = "SELECT * FROM question Where Id = '$QID'";
$r = mysqli_query($con, $Q);
$Q = $r->fetch_assoc();
$CID = $Q["CoustomerId"];
$reg = "INSERT INTO reported_incident_by_experts(IncDesc, QuestionId, CustomerId, ExpertId) VALUES ('$Ans', '$QID', '$CID', '$EID');";
if (mysqli_query($con, $reg)) {
    echo "Success";
} else {
    echo "Error";
}
?>