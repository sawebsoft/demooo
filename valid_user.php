<?php
   session_start();
   
   $dear = $_SESSION ['cr'];
   if($dear=="deer"){
    echo "";
   }else{
    header("location: index.php");
   }


?>