<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $hid = $_REQUEST['hid'];

    $supplierName = $_REQUEST['supplierName'];
    $supplierEmail = $_REQUEST['supplierEmail'];
    $supplierPhone = $_REQUEST['supplierPhone'];
    $supplierAddress = $_REQUEST['supplierAddress'];
    $note = $_REQUEST['note'];
    $supplierPrevBalance = $_REQUEST['supplierPrevBalance'];
    $supplierCarrentBalance = $_REQUEST['supplierCarrentBalance'];
    

    $sql = "UPDATE suppliers SET supplierName ='$supplierName', supplierEmail = '$supplierEmail', supplierPhone = '$supplierPhone', supplierAddress = '$supplierAddress', note = '$note', supplierPrevBalance = '$supplierPrevBalance', supplierCarrentBalance = '$supplierCarrentBalance' WHERE id = $hid";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: supplier_list.php');
    }else{
        echo "no connected";
    }
?>