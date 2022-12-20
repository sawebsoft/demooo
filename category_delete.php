<?php
    require_once("valid_user.php");
    require_once("connectdb.php");


    $id = $_REQUEST['id'];
    $sql5 = "DELETE FROM categories WHERE id = '$id'";

    $result = mysqli_query($conn, $sql5);
    header('location: categorylist.php');
?>