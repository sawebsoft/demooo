<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $customerName = $_REQUEST['customerName'];
    $customerEmail = $_REQUEST['customerEmail'];
    $customerPhone = $_REQUEST['customerPhone'];
    $customerAddress = $_REQUEST['customerAddress'];
    $note = $_REQUEST['note'];
    $custoPrevBalance = $_REQUEST['custoPrevBalance'];
    $customerCurrentBalance = $_REQUEST['customerCurrentBalance'];
    

    $sql = "CALL customerEntry('$customerName', '$customerEmail', '$customerPhone', '$customerAddress', '$note', '$custoPrevBalance', '$customerCurrentBalance')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: customer_list.php');
    }else{
        echo "no connected";
    }
 


?>