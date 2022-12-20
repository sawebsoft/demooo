<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $categoryName = $_REQUEST['categoryName'];
    $categoryCode = $_REQUEST['categoryCode'];
    
    $sql = "CALL categoryEntry('$categoryName', '$categoryCode')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: categorylist.php');
    }else{
        echo "no connected";
    }
?>