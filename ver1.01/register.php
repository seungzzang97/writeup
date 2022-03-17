<?php
   include("./db_connection.php");
   if(isset($_SESSION['USERS'])){
      $id = $_SESSION['USERS'];
      
      $sql = " SELECT * FROM webuser WHERE user_id = '$id' ";
      $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
      mysqli_close($conn);

      $mode = "modify";
      $modify_a = "readonly";
   }

   else {
      $mode = "insert";
      $modify_a = "";
   }
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
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form action="./register_ck.php" method="GET">
                  <input type="hidden" name="mode" value="<?php echo $mode ?>">
                  <div class="form-group">
                  <?php if($mode=="modify") echo '<h1> Update </h1>';
                        else echo '<h1> Sign Up </h1>'?>
                     <label>Name</label>
                     <input type="text" class="form-control" value="<?php echo $result['USER_NAME'] ?? ''?>" name="name">
                  </div>
                  <div class="form-group">
                     <label>User ID</label>
                     <input type="text" class="form-control" value="<?php echo $result['USER_ID'] ?? ''?>" <?php echo $modify_a ?> name="id">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" class="form-control" value="" name="pw">
                  </div>
                  <div class="form-group">
                     <label>Verify password</label>
                     <input type="password" class="form-control" value="" name="pw2">
                  </div>
                  <div class="form-group">
                     <label><input type="radio" name="gender" value="male" checked> male </label>
                     <label><input type="radio" name="gender" value="female"> female </label>
                  </div> 
                  <button type="submit" class="btn btn-black">Confirm</button>
                  <?php if($mode=="modify"){ echo '<button type="submit" class="btn btn-secondary" formaction="./main.php">Back</button>';}
                        else echo '<button type="submit" class="btn btn-secondary" formaction="./index.php">Login</button>'?>
               </form>
            </div>
         </div>
      </div>
</body>
</html>




