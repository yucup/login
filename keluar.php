<?php 
    session_start();
    $_SESSION['userweb']="NO";
    session_destroy();
    header ("location:H.login.php");
    exit;

?>