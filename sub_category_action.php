<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $category_id = $_REQUEST['category_id'];
    $subCategoryName = $_REQUEST['subCategoryName'];
    $subCategoryCode = $_REQUEST['subCategoryCode'];
    
    $sql = "CALL subcategoryEntry('$category_id', '$subCategoryName', '$subCategoryCode')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: sub_category_list.php');
    }else{
        echo "no connected";
    }
?>