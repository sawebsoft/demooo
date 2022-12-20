<?php
    require_once("valid_user.php");
    require_once("connectdb.php");


    $id = $_REQUEST['id'];
    $sql5 = "DELETE FROM customers WHERE id = '$id'";

    $result = mysqli_query($conn, $sql5);
    header('location: customer_list.php');
?>