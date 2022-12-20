<?Php
    $target_dir = "upload/";

    $imagename = basename($_FILES["cat_image"]["name"]);
    $imagepath = $target_dir . $imagename;
    $imageFileType = strtolower(pathinfo($imagename,PATHINFO_EXTENSION));
    $newimagepath = $target_dir . time() . "." . $imageFileType;
    move_uploaded_file($_FILES["cat_image"]["tmp_name"], $newimagepath);
    
?>