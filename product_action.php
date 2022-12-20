<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $productName = $_REQUEST['productName'];
    $prodCode = $_REQUEST['prodCode'];
    $catagoryID = $_REQUEST['catagoryID'];
    $subCatagoryID = $_REQUEST['subCatagoryID'];
    $prodRate = $_REQUEST['prodRate'];
    $stockBalance = $_REQUEST['stockBalance'];
    
    $sql = "CALL productEntry('$productName', '$prodCode', '$catagoryID', '$subCatagoryID', '$prodRate', '$stockBalance')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: product_list.php');
    }else{
        echo "no connected";
    }
?>