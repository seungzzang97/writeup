<?php
    include("./db_connetcion.php");
    
    $user_id = trim($_GET['user_id']);
    $user_password = trim($_GET['user_password']);
    
    $sql = "SELECT * FROM user WHERE user_id = '$user_id' and user_password = '$user_password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if(!$result){
        echo "Error";
        exit;
    } 

    if($user['user_id']) {
        echo "";
        echo "<p style='text-align:center'>Hi</p>"; 
    }
    else {
        echo "<script>alert('인증실패');</script>";
        echo "<script>location.replace('./index.php');</script>"; 
    }
?>