<?php
    include("./db_connetcion.php");
    
    $user_id = trim($_POST['user_id']);
    $user_password = trim($_POST['user_password']);
    
    $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if(!$user['user_id'] || !($user_password == $user['user_password'])){
        echo "<script>alert('Wrong !');</script>";
        echo "<script>location.replace('./index.php')</script>";
        exit;
    }

    $_SEESION['session_user_id'] = $user_id;

    mysqli_close($conn);

    if(isset($_SESSION)){
        echo "<script>alert('인증성공');</script>";
        echo "<script>location.replace('./success.php');</script>"; 
    }

?>