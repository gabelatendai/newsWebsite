
<?php

include '../rb.php';


$db= R::setup('mysql:host=localhost;dbname=newsdb', 'root', ''); //for both mysql or mariaDB

if (isset($_POST['register'])) {

    $pass =$_POST['password'] ;
    $passconfrm = $_POST['password2'];


    $email = $_POST['email'];

    $init = R::findOne('users', 'email = ? ', [$email]);
    if($pass != $passconfrm){
        print ("<script>window.alert('Your password doesnt match please retype your password!!!')</script>");
        print ("<script>window.location.assign('register.php')</script>");
    }
    if($init> 0 ){
        print ("<script>window.alert('Email address already registered with another user!!!')</script>");
        print ("<script>window.location.assign('register.php')</script>");
    }
    else{
                $admin = R::dispense('users');
        $admin->email = $email;
        $admin->password =md5($pass);
        R::store($admin);

        print ("<script>window.alert('Successfully added!!!')</script>");
        print ("<script>window.location.assign('index.php')</script>");
    }

}

?>

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
    <!-- Ansta CSS -->
    <link href="assets/plugins/single-page/css/main.css" rel="stylesheet" type="text/css">
</head>

<body class="bg-gradient-primary">
<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-5">
            <form class="login100-form validate-form" action="" method="post" enctype="multipart/form-data">
					<span class="login100-form-title">
						Register
					</span>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-envelope" aria-hidden="true"></i>
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password2" placeholder="Re Enetr Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fas fa-lock" aria-hidden="true"></i>
						</span>
                </div>
                <div class="container-login100-form-btn">
                    <button name="register" type="submit" href="#" class="login100-form-btn btn-primary">
                        Submit
                    </button>
                </div>
                <div class="text-center pt-2">
						<span class="txt1">
							Forget it
						</span>
                    <a class="txt2" href="index.php">
                      I Have account already Login
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