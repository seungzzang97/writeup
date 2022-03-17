<?php
    session_start();
    session_unset();
    session_destroy();

    if(!isset($_SESSION['USERS'])){
        echo "<script>alert('Okay, Bye');</script>";
        echo "<script>location.replace('./index.php')</script>";
    }
?>