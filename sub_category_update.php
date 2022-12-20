<?php
    require_once("valid_user.php");
    require_once("connectdb.php");
   // require_once("uploadimage.php");

    $hid = $_REQUEST['hid'];

    $category_id = $_REQUEST['category_id'];
    $subCategoryName = $_REQUEST['subCategoryName'];
    $subCategoryCode = $_REQUEST['subCategoryCode'];

    $sql = "UPDATE sub_categories SET category_id ='$category_id', subCategoryName = '$subCategoryName', subCategoryCode = '$subCategoryCode' WHERE id = $hid";

    $result = mysqli_query($conn, $sql);

    if($result){
        header('location: sub_category_list.php');
    }else{
        echo "no connected";
    }
?>