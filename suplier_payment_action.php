<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $supplierName = $_REQUEST['supplierName'];
    $paymentDate = $_REQUEST['paymentDate'];
    $note = $_REQUEST['note'];
    $transactionMethod = $_REQUEST['transactionMethod'];
    $paymentAmount = $_REQUEST['paymentAmount'];

    $sql = "INSERT INTO supplier_payment_lists VALUES(NULL, '$supplierName', '$paymentDate', '$note', '$transactionMethod', '$paymentAmount')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: suplier_payment_list.php');
    }else{
        echo "no connected";
    }
?>