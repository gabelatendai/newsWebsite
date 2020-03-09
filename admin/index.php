<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
	<meta name="author" content="Creative Tim">

	<!-- Title -->
	<title>Ansta - Responsive Multipurpose Admin Dashboard Template</title>

	<!-- Favicon -->
	<link href="assets/img/brand/favicon.png" rel="icon" type="image/png">

	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

	<!-- Icons -->
	<link href="assets/css/icons.css" rel="stylesheet">

	<!--Bootstrap.min css-->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Ansta CSS -->
	<link href="assets/css/dashboard.css" rel="stylesheet" type="text/css">

	<!-- Single-page CSS -->
	<link href="assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">

</head>
<?php
include  ("../rb.php");
R::setup('mysql:host=localhost;dbname=newsdb', 'root', ''); //for both mysql or mariaDB


if (isset($_POST['login'])) {
    $_SESSION['last_login_timestamp'] = time();
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $activity = "Log in";
    $Time = time();
    /*
    ----------------------------    gabela ---------------------------------------------*/

    $init = R::findOne('users', 'email = ? AND password = ?', [$email, $password]);


    if ($init == null) {
        //   $message = "invalid details";
        print ("<script>window.alert('invalid details')</script>");
        print ("<script>window.location.assign('index.php')</script>");


    } else {
        @session_start();
        // $_SESSION['role'] = $init->type;
        $_SESSION['email'] = $init->email;
        $_SESSION['user_id'] = $init->id;
      echo '<div class="alert alert-success" role="alert" style="background-color:transparent">...<h2  style="color:white"> <img src="images/492.png" />
!login successfull</h2></div>';


        echo '  <h2 align="center">
          <meta content="2;dashboard.php" http-equiv="refresh" />
        </h2> ';
    }

}
?>
<body class="bg-gradient-primary">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-5">

				<form class="login100-form validate-form" action="" method="post" enctype="multipart/form-data">
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button name="login" type="submit" class="login100-form-btn btn-primary">
							Login
						</button>
					</div>

					<div class="text-center pt-2">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="">
							Username / Password?
						</a>
					</div>

					<div class="text-center pt-1">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Ansta Scripts -->
	<!-- Core -->
	<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>