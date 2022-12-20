<?php
    session_start();
    require_once ("connectdb.php");
    $adminname = $_REQUEST["adminname"];
    $adminemail = $_REQUEST["adminemail"];
    $adminpassword = $_REQUEST["adminpassword"];

    $sql = "SELECT * FROM admin_login where adminemail = '$adminemail'";

    $result = mysqli_query($conn,$sql);
    
    if(mysqli_num_rows($result)){

        $row = mysqli_fetch_assoc($result);
        $adminpassword = $row['adminpassword'];
        if($adminpassword == $adminpassword){
            $_SESSION ['cr'] = "deer";
            $row['adminpassword'] = ($row['adminpassword']);
            $_SESSION['user'] = $row;
            header("location: admin_home.php");
        }else{
            header("location: index.php");

        }

    }else{
        echo "no data";
        header("location: index.php");
    }
    

?>
