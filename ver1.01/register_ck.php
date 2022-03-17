<?php
    include("./db_connection.php");

    $mode = $_GET['mode'];

    switch ($mode){
        case 'insert' :
            $id = trim($_GET['id']);
            $in = "Your account was created.";
            break;

        case 'modify' :
            $id = trim($_SESSION['USERS']);
            $in = "Your account was modified";
            break;

        default :
            echo "<script>location.replace('./index.php');</script>";
            break;
    }

    if (!$_GET['name']){
        echo "<script>alert('Please enter your name');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    if (!$_GET['id']){
        echo "<script>alert('Please enter your ID');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    if (!$_GET['pw']){
        echo "<script>alert('Please enter your password');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    if (!$_GET['pw2']){
        echo "<script>alert('Please enter your password');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    if ($_GET['pw'] != $_GET['pw2']){
        echo "<script>alert('Please check your password');</script>";
        echo "<script>location.replace('./register.php');</script>";
        exit;
    }

    $name = trim($_GET['name']);
    $id = trim($_GET['id']);
    $pw = trim($_GET['pw']);
    $gender = trim($_GET['gender']);

    if ($mode == 'insert'){
        $sql = " SELECT * FROM webuser WHERE user_id = '$id' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0){
            echo "<script>alert('Your ID is already exists.');</script>";
            echo "<script>location.replace('./register.php');</script>";
            exit;
        }

        $sql = " INSERT INTO webuser
                    SET user_id = '$id',
                        user_password = '$pw',
                        user_name = '$name',
                        user_gender = '$gender'
                ";
        
        $result = mysqli_query($conn, $sql);
    }

    else if ($mode == 'modify'){
        $sql = " UPDATE webuser
                    SET user_password = '$pw',
                        user_name   = '$name',
                        user_gender = '$gender'
                        ";
        $result = mysqli_query($conn, $sql);   
    }

    if ($result) {
        echo "<script>alert('$in');</script>";
        echo "<script>location.replace('./index.php');</script>";
    }



 


?>