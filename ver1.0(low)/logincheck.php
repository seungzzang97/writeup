<?php
    include("./db_connetcion.php");
    
    $user_id = trim($_POST['user_id']);
    $user_password = trim($_POST['user_password']);
    
    $sql = "SELECT * FROM user WHERE user_id = '$user_id' and user_password = '$user_password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if(!$result){
        echo "Error";
        exit;
    } 

    if($user['user_id']) {
        echo "<script>alert('인증성공');</script>";
        echo "<script>location.replace('./success.php');</script>"; 
    }
    else {
        echo "<script>alert('Wrong !');</script>";
        echo "<script>location.replace('./index.php');</script>"; 
    }


?>