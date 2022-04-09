<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" />

	<title>Document</title>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: 'Poppins', sans-serif
		}

		body {
			height: 100vh;
			width: 100vw;
			display: flex;
			justify-content: center;
			align-items: center;
			background-color: rgb(250, 250, 250, 250);
		}

		.wrapper {
			max-width: 350px;
			min-height: 500px;
			margin: 80px auto;
			padding: 40px 30px 30px 30px;
			background-color: #ecf0f3;
			border-radius: 15px;
			box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
		}

		.logo {
			width: 10em;
			margin: auto;
		}

		.logo img {
			width: 100%;
			height: 10em;
			object-fit: cover;
			border-radius: 50%;
			box-shadow: 0px 0px 3px #5f5f5f, 0px 0px 0px 5px #ecf0f3, 8px 8px 15px #a7aaa7, -8px -8px 15px #fff
		}

		.wrapper .name {
			font-weight: 600;
			font-size: 1.4rem;
			letter-spacing: 1.3px;
			padding-left: 10px;
			color: #555
		}

		.wrapper .form-field input {
			width: 100%;
			display: block;
			border: none;
			outline: none;
			background: none;
			font-size: 1.2rem;
			color: #666;
			padding: 10px 15px 10px 10px
		}

		.wrapper .form-field {
			padding-left: 10px;
			margin-bottom: 20px;
			border-radius: 20px;
			box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff
		}

		.wrapper .form-field .fas {
			color: #555
		}

		.wrapper .btn {
			box-shadow: none;
			width: 100%;
			height: 40px;
			background-color: #03A9F4;
			color: #fff;
			border-radius: 25px;
			box-shadow: 3px 3px 3px #b1b1b1, -3px -3px 3px #fff;
			letter-spacing: 1.3px
		}

		.wrapper .btn:hover {
			background-color: #039BE5
		}

		.wrapper a {
			text-decoration: none;
			font-size: 0.8rem;
			color: #03A9F4
		}

		.wrapper a:hover {
			color: #039BE5
		}

		@media(max-width: 380px) {
			.wrapper {
				margin: 30px 20px;
				padding: 40px 15px 15px 15px
			}
		}

	</style>
</head>

<body>
	<div class="wrapper">
		<div class="logo"> <img src="https://store.tigaserangkai.com/wp-content/uploads/2015/12/Logo-TS.jpg" alt="" class="p-2">
		</div>
		<div class="text-center mt-5 name text-center">TIga Serangkai</div>
		<form class="p-3 mt-3" action="<?php echo base_url('login/auth') ?>" method="POST">
			<div class="form-field d-flex align-items-center mt-3">
				<span class="far fa-user"></span>
				<input type="email" name="email" id="userName" placeholder="Email">
			</div>
			<div class="form-field d-flex align-items-center">
				<span class="fas fa-key"></span>
				<input type="password" name="password" id="pwd" placeholder="Password">
			</div> 
			<input type="checkbox" class="" name="remember"><span for="remember" class="ms-3">Remember Me</span>
			<button class="btn mt-3">Login</button>
		</form>
		<div class="text-center fs-6 mt-3"> <a href="#">Forget password?</a> or <a href="#">Sign up</a> </div>
	</div>

	<script src="https://use.fontawesome.com/releases/v5.7.2/css/all.css"></script>
</body>

</html>
