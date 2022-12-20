<?php
    session_start();
    $_SESSION ['cr']="";
    session_destroy();
    

    
    header("location: index.php");

?>