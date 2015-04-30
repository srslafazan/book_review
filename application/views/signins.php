<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="title">
			<h1>Welcome!</h1>
		</div>
		<div class="reg col-md-6 well">
			<form action="/signins/user_registration" method="POST">
				<h2>Register</h2>
				<p>Name: <input type="text" name="name"></p>
				<p>Alias: <input type="text" name="alias"</p>
				<p>Email: <input type="text" name="email"></p>
				<p>Password: <input type="password" name="password"></p>
				<p>Confirm PW: <input type="password" name=""></p>
				<input type="submit" value="Register" class="btn btn-success">
			</form>
		</div>
		<div class="log col-md-6 well">
			<form action="" method="POST">
				<h2>Login</h2>
				<p>Email <input type="text" name=""></p>
				<p>Password: <input type="password" name=""></p>
				<input type="submit" value="Login" class="btn btn-primary">
			</form>
		</div>
	</div>
</body>
</html>