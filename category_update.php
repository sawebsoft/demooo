<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $hid = $_REQUEST['hid'];

    $categoryName = $_REQUEST['categoryName'];
    $categoryCode = $_REQUEST['categoryCode'];

    $sql = "UPDATE categories SET categoryName ='$categoryName', categoryCode = '$categoryCode' WHERE id = $hid";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: categorylist.php');
    }else{
        echo "no connected";
    }
?>