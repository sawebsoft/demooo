<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $hid = $_REQUEST['hid'];

    $productName = $_REQUEST['productName'];
    $prodCode = $_REQUEST['prodCode'];
    $catagoryID = $_REQUEST['catagoryID'];
    $subCatagoryID = $_REQUEST['subCatagoryID'];
    $prodRate = $_REQUEST['prodRate'];
    $stockBalance = $_REQUEST['stockBalance'];

    $sql = "UPDATE productstock_manages SET productName ='$productName', prodCode = '$prodCode', catagoryID = '$catagoryID', subCatagoryID = '$subCatagoryID', prodRate = '$prodRate', stockBalance = '$stockBalance' WHERE id = $hid";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: product_list.php');
    }else{
        echo "no connected";
    }
?>