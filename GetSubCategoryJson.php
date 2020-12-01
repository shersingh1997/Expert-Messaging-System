<?php
    require_once ('Config.php');
    $response = array();
	$CID=$_GET['catid'];
    $Q=mysqli_query($con,"SELECT * FROM question_sub_category WHERE CategoryId='$CID'");
    $i=0;
    while ($I=mysqli_fetch_array($Q)){
        $response[$i]["id"] =  $I["Id"];
        $response[$i]["subCategoryName"] =  $I["SubCategoryName"];
        $i+=1;
    }
    echo json_encode($response);
?>