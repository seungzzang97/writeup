<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    ini_set( "display_errors", 'off' );

    $mysql_host = "localhost";
    $mysql_user = "root";
    $mysql_password = "";
    $mysql_db = "web";
    
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);

    if(!$conn) {
        echo "<script>alert('DB Error');</script>";
        exit;
    }
    
    session_start();
?>