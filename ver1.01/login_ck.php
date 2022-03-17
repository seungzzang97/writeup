<?php
    include("./db_connection.php");


   $id = trim($_GET['id']);
   $pw = trim($_GET['pw']);

   $sql = "SELECT * FROM webuser WHERE user_id = '$id' and user_password = '$pw'";

   $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

   if($result['USER_ID']==$id && $result['USER_PASSWORD']==$pw && isset($result)) {
        $_SESSION['USERS'] = $id;
        echo "<script>alert('Authentication Success');</script>";
        echo "<script>location.replace('./main.php');</script>";
   }
   else {
    echo "<script>alert('Authentication Fail');</script>";
    echo "<script>location.replace('./index.php');</script>";
   }

   mysqli_close($conn);

?>