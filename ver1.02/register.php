<?php
    include("db_connetcion.php");
    $mode = "insert";
?>

<html>
<head>
    <title>회원가입</title>
    <link rel="stylesheet" href="./login.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- All the files that are required -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
</head>
<body>
<!-- REGISTRATION FORM -->
<div class="text-center" style="padding:50px 0">
	<div class="logo">Register</div>
	<!-- Main Form -->
	<div class="login-form-1">
		<form action="./RegisterCheck.php" id="register-form" class="text-left" method="post">
            <input type="hidden" name="mode" value="<?php echo $mode ?>">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="user_id" class="sr-only">Email address</label>
						<input type="text" class="form-control" id="user_id" name="user_id" placeholder="ID">
					</div>
					<div class="form-group">
						<label for="user_password" class="sr-only">Password</label>
						<input type="password" class="form-control" id="user_password" name="user_password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="user_password_confirm" class="sr-only">Password Confirm</label>
						<input type="password" class="form-control" id="user_password_confirm" name="user_password_confirm" placeholder="Confirm Password">
					</div>
					
					<div class="form-group">
						<label for="user_email" class="sr-only">Email</label>
						<input type="text" class="form-control" id="user_email" name="user_email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="user_name" class="sr-only">Full Name</label>
						<input type="text" class="form-control" id="user_name" name="user_name" placeholder="Full Name">
					</div>
					
					<div class="form-group login-group-checkbox">
						<input type="radio" class="" name="user_gender" id="male" placeholder="male" value="male">
						<label for="male">male</label>
						
						<input type="radio" class="" name="user_gender" id="female" placeholder="female" value="female">
						<label for="female">female</label>
					</div>
				</div>
				<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
			</div>
			<div class="etc-login-form">
				<p>already have an account? <a href="./index.php">login here</a></p>
			</div>
		</form>
	</div>
	<!-- end:Main Form -->
</div>
</body>
</html>