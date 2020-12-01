<?php
    session_start();
    require_once ('config.php');
    $Id = $_SESSION['Id'];
    $QTitle=$_POST['questionTitle'];
    $CID=$_POST['categoryID'];
    $SCID=$_POST['subCategoryID'];
    $QDesc=$_POST['questionDesc'];
    $Visibility=$_POST['visibility'];
    $reg="insert into question(QuestionTitle, QuestionDesc, Visibility, CategoryId, SubCategoryId, CoustomerId) 
    values('$QTitle', '$QDesc','$Visibility', '$CID', '$SCID', '$Id')";
    if(mysqli_query($con,$reg)){
		$message = 'Your question will be posted successfully';
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'post-question.php';
        </script>";
    }
    else{
		$message = "Your question will not be posted";
        echo "
        <script type='text/javascript'>
            alert('$message');
            window.location.href = 'post-question.php';
        </script>";
    }
?>