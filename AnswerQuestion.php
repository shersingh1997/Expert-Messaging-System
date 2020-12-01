<?php 
    require_once('config.php');
    $Ans = $_POST['ans'];
    $QID = $_POST['questionId'];
    $EID = $_POST['expertId'];

    $reg="INSERT INTO answer(AnsDesc, QuestionId, ExpertId) VALUES ('$Ans', '$QID', '$EID');";
    if(mysqli_query($con,$reg)){
		$message = "Answer posted successfully !!!";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'index_expert.php';
        </script>";
    }
    else{
		$message = "Answer not posted !!!";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'index_expert.php';
        </script>";
    }
?>