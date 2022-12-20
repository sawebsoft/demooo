<?php
    require_once("valid_user.php");
    require_once("connectdb.php");


    $id = $_REQUEST['id'];
    $sql5 = "DELETE FROM purchase_short_manages WHERE id = '$id'";

    $result = mysqli_query($conn, $sql5);
    header('location: purchase_list.php');
?>