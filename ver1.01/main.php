<?php
   include("./db_connection.php");
?>

<!DOCTYPE html>

<html lang="ko">
<head>
      <meta charset="UTF-8">
      <title> Vunlerable Website </title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link rel="stylesheet" href="./style/style.css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>
<div class="sidenav">
         <div class="login-main-text">
            <h2>Vulnerable Website</h2>
            <p>Hello! <?php echo ucfirst($_SESSION['USERS']) ?>!</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="GET">
                  <button type="submit" class="btn btn-black" formaction="./register.php">Modify</button>
                  <button type="submit" class="btn btn-black" formaction="./logout.php">Logout</button><br><br>
                  <button type="submit" class="btn btn-secondary" formaction="./member_list.php">Member List</button>
               </form>
            </div>
         </div>
      </div>
</body>
</html>