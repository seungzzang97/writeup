<?php
    include("./db_connection.php");

    if($_SESSION['USERS'] != 'admin'){
        echo "<script>alert('You\'re not admin.');</script>";
        echo "<script>location.replace('./main.php')</script>";
    }

    $sql = " SELECT COUNT(*) AS 'count' FROM webuser ";
    $result = mysqli_fetch_assoc(mysqli_query($conn, $sql));
    $mem_total = $result['count'];

    $sql = " SELECT * FROM webuser ";
    $s_result = mysqli_query($conn, $sql);

    
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
            <p>Hello! <?php echo ucfirst($_SESSION['USERS']); ?>!</p>
         </div>
      </div>
      <div class="main">
      <div class="container">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
                <h1> Membership List </h1>
                <table class="table table-striped custab">
                    <caption>Total : <?php echo $mem_total;?></captin>
                    <thead>
                        <tr>
                            <th>Number</th>
                            <th>USER ID</th>
                            <th>USER NAME</th>
                            <th>Gender</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $result=mysqli_fetch_assoc($s_result); $i++): ?> 
                            <tr>
                                <td><?php echo $result['USER_NUMBER']?></td>
                                <td><?php echo $result['USER_ID']?></td>
                                <td><?php echo $result['USER_NAME']?></td>
                                <td><?php echo $result['USER_GENDER']?></td>
                            </tr>
                            <?php endfor; ?>
                    </tbody>
                </table>
            </div>
               <form method="GET">
                  <button type="submit" class="btn btn-black" formaction="./main.php">Back</button>
                  <button type="submit" class="btn btn-secondary" formaction="./logout.php">Logout</button>
               </form>
            </div>
         </div>
      </div>
</body>
</html>
