<?php
    session_start(); 
    $_SESSION = array(); 
    session_destroy(); 
    header('location: /19 - Gabriel Lopes Pitz/adm/login.php'); 
?>