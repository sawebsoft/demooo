<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $hid = $_REQUEST['hid'];

    $customerName = $_REQUEST['customerName'];
    $customerEmail = $_REQUEST['customerEmail'];
    $customerPhone = $_REQUEST['customerPhone'];
    $customerAddress = $_REQUEST['customerAddress'];
    $note = $_REQUEST['note'];
    $custoPrevBalance = $_REQUEST['custoPrevBalance'];
    $customerCurrentBalance = $_REQUEST['customerCurrentBalance'];
    

    $sql = "UPDATE customers SET customerName ='$customerName', customerEmail = '$customerEmail', customerPhone = '$customerPhone', customerAddress = '$customerAddress', note = '$note', custoPrevBalance = '$custoPrevBalance', customerCurrentBalance = '$customerCurrentBalance' WHERE id = $hid";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: customer_list.php');
    }else{
        echo "no connected";
    }
?>