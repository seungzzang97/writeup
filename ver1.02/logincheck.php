<?php
    include("./db_connetcion.php");
    include("./index.php");

    $user_id = trim($_GET['user_id']);
    $user_password = trim($_GET['user_password']);
    
    $sql = "SELECT * FROM user WHERE user_id = '$user_id' and user_password = '$user_password'";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);

    if(!$result){
        echo "Error";
        exit;
    } 

    

    if(($user['user_id']) && ($user['user_password']==$user_password)) {
        echo "<p style='text-align:center'>  Hello {$user['user_id']} ! </p>"; 
    }
    else if($user['user_id']) {
        echo "<p style='text-align:center'>  No Hack! </p>";
    }

    else {
        echo "<p style='text-align:center'>  Login fail ! </p>";
    }

    echo "<p style= 'text-align:center'> SELECT * FROM user WHERE user_id = '{$user_id}' and user_password = '{$user_password}' </p>";


?>