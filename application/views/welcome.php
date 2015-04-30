<!doctype html>
<html lang='en'>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"
</head>
<body>
	<div class="container">
		<h1>Welcome!</h1>
		<div class="col-md-6">
			<form action='' method='POST'> 
			  <div class="form-group">
			  	<h3>Register</h3>
			    <label for="">Name</label>
			    <input type="text" class="form-control" id="" placeholder="Name">
			  </div>
			  <div class="form-group">
			    <label for="">Alias</label>
			    <input type="text" class="form-control" id="" placeholder="Alias">
			  </div>
			  <div class="form-group">
			    <label for="">Email address</label>
			    <input type="email" class="form-control" id="" placeholder="Enter email">
			  </div>
			  <div class="form-group">
			    <label for="">Password</label>
			    <input type="password" class="form-control" id="" placeholder="Password">
			  </div>
			  <div class="form-group">
			    <label for="">Confirm Password</label>
			    <input type="password" class="form-control" id="" placeholder="Confirm Password">
			  </div>
			  <input class="btn btn-success" type="submit" value="Register">  
		</div> <!-- col-md-2 end -->


		<div class="col-md-6">
			<form action='' method='POST'> 
			  <div class="form-group">
			  	<h3>Login</h3>
			    <label for="">Email address</label>
			    <input type="email" class="form-control" id="" placeholder="Email">
			  </div>
			  <div class="form-group">
			    <label for="">Password</label>
			    <input type="password" class="form-control" id="" placeholder="Password">
			  </div>
			  <input class="btn btn-primary" type="submit" value="Login">
			</form>  
		</div>
	</div> <!-- container end -->

</body>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-2.1.3.min.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</html>