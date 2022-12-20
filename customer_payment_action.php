<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $customerName = $_REQUEST['customerName'];
    $paymentDate = $_REQUEST['paymentDate'];
    $note = $_REQUEST['note'];
    $transactionMethod = $_REQUEST['transactionMethod'];
    $paymentAmount = $_REQUEST['paymentAmount'];

    $sql = "INSERT INTO customerpayment_lists VALUES(NULL, '$customerName', '$paymentDate', '$note',        '$transactionMethod', '$paymentAmount')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: customer_payment_list.php');
    }else{
        echo "no connected";
    }
?>