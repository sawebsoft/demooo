<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $supplierName = $_REQUEST['supplierName'];
    $supplierEmail = $_REQUEST['supplierEmail'];
    $supplierPhone = $_REQUEST['supplierPhone'];
    $supplierAddress = $_REQUEST['supplierAddress'];
    $note = $_REQUEST['note'];
    $supplierPrevBalance = $_REQUEST['supplierPrevBalance'];
    $supplierCarrentBalance = $_REQUEST['supplierCarrentBalance'];
    

    $sql = "CALL supplierEntry('$supplierName', '$supplierEmail', '$supplierPhone', '$supplierAddress', '$note', '$supplierPrevBalance', '$supplierCarrentBalance')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: supplier_list.php');
    }else{
        echo "no connected";
    }
 


?>