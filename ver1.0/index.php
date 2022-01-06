<?php
    include("./db_connetcion.php")
?>

<html>
    <head>
        <link rel="stylesheet" href="./Login.css">
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Login</title>
    </head>
    <body>
        <div class="text-center" style="padding:50px 0">
            <div class="logo">Login</div>
            <div class="login-form-1">
                <form action="./logincheck.php" id="login-form" class="text-left" method="post">
                    <div class="login-form-main-message"></div>
                    <div class="main-login-form">
                        <div class="login-group">
                            <div class="form-group">
                                <label for="user_id" class="sr-only">ID</label>
                                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID">
                            </div>
                            <div class="form-group">
                                <label for="user_password" class="sr-only">Password</label>
                                <input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
                            </div>
                        </div>
                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>