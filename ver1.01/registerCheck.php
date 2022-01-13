<?php
    include("./db_connetcion.php");

    $mode = $_POST['mode'];

    switch ($mode) {
        case 'insert' :
            $user_id = trim($_POST['user_id']);
            break;
    }
   
    if(!$_POST['user_id']){
        echo "<script> alert('아이디를 입력하세요.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }

    if(!$_POST['user_password']){
        echo "<script> alert('패스워드를 입력하세요.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }

    if($_POST['user_password'] != $_POST['user_password_confirm']){
        echo "<script> alert('패스워드가 일치하지 않습니다.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }

    if(!$_POST['user_email']){
        echo "<script> alert('이메일을 입력하세요.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }

    if(!$_POST['user_name']){
        echo "<script> alert('이름을 입력하세요.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }

    if(!$_POST['user_gender']){
        echo "<script> alert('성별을 고르세요.'); </script>";
        echo "<script> location.replace('./Register.php')</script>";
    }


    $user_password = trim($_POST['user_password']);
    $user_email = trim($_POST['user_email']);
    $user_name = trim($_POST['user_name']);
    $user_gender = $_POST['user_gender'];



    if ($mode == "insert"){
        $sql = "SELECT * FROM user WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
            echo "<script> alert('아이디가 이미 존재합니다.'); </script>";
            echo "<script> location.replace('./Register.php')</script>";
        }

        $sql = "INSERT INTO user
                    SET user_id = '$user_id',
                        user_password = '$user_password',
                        user_email = '$user_email',
                        user_name = '$user_name',
                        user_gender = '$user_gender'";
        
        $result = mysqli_query($conn, $sql);
    }

    if($result) {
        echo "<script>alert('회원가입 완료');</script>";
        echo "<script> location.replace('./index.php')</script>";
        exit;
    }
    else {
        echo "<script>alert('회원가입 실패');</script>";
        echo "<script> location.replace('./index.php')</script>";
    }
?>