
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" type="image/png" href="<?php echo base_url() ?>registrasi/images/icons/favicon.ico" />

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/fonts/iconic/css/material-design-iconic-font.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/animate/animate.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/css-hamburgers/hamburgers.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/animsition/css/animsition.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/select2/select2.min.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/vendor/daterangepicker/daterangepicker.css">

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>registrasi/css/main.css">

</head>
<body style="background-color: #999999;">
<div class="limiter">
<div class="container-login100">
<div class="login100-more" style="background-image: url('images/admin.jpg');"></div>
<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50">
<form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">
<div class="login100-form validate-form">
<span class="login100-form-title p-b-59">
Create an Account!
</span>
<div class="wrap-input100 validate-input" data-validate="Name is required">
<span class="label-input100">Full Name</span>
<input class="input100" type="text" name="nama" placeholder="Name...">
<span class="focus-input100"></span>
<?php echo form_error('nama','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
<span class="label-input100">Email</span>
<input class="input100" type="text" name="email" placeholder="Email addess...">
<span class="focus-input100"></span>
<?php echo form_error('email','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="Username is required">
<span class="label-input100">Username</span>
<input class="input100" type="text" name="username" placeholder="Username...">
<span class="focus-input100"></span>
<?php echo form_error('username','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="label-input100">Date of Birth</span>
<input class="input100" type="date" name="tanggallahir" placeholder="Birth...">
<span class="focus-input100"></span>
<?php echo form_error('tanggallahir','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="">
<span class="label-input100">Skin Type</span>
<input class="input100" type="text" name="jeniskulit" placeholder="Skin Type...">
<span class="focus-input100"></span>
<?php echo form_error('jeniskulit','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="Password is required">
<span class="label-input100">Password</span>
<input class="input100" type="text" name="password_1" placeholder="*************">
<span class="focus-input100"></span>
<?php echo form_error('password_1','<div class="text-danger small">', '</div>') ?>
</div>
<div class="wrap-input100 validate-input" data-validate="Repeat Password is required">
<span class="label-input100">Repeat Password</span>
<input class="input100" type="text" name="password_2" placeholder="*************">
<span class="focus-input100"></span>
</div>


<div class="container-login100-form-btn">
<div class="wrap-login100-form-btn">
<div class="login100-form-bgbtn"></div>
<button type="submit" class="login100-form-btn">
Sign Up
</button>
</div>
<a href="<?php echo base_url('auth/login') ?>" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
Sign in
<i class="fa fa-long-arrow-right m-l-5"></i>
</a>
</div>
</form>
</div>
</div>
</div>

<script src="<?php echo base_url() ?>registrasi/vendor/jquery/jquery-3.2.1.min.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/vendor/animsition/js/animsition.min.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/vendor/bootstrap/js/popper.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>
<script src="<?php echo base_url() ?>registrasi/vendor/bootstrap/js/bootstrap.min.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/vendor/select2/select2.min.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/vendor/daterangepicker/moment.min.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>
<script src="<?php echo base_url() ?>registrasi/vendor/daterangepicker/daterangepicker.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/vendor/countdowntime/countdowntime.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script src="<?php echo base_url() ?>registrasi/js/main.js" type="d774bfe2dd16780bec84cf64-text/javascript"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d774bfe2dd16780bec84cf64-text/javascript"></script>
<script type="d774bfe2dd16780bec84cf64-text/javascript">
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="d774bfe2dd16780bec84cf64-|49" defer=""></script></body>
</html>
