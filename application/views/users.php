<html>
<head>
	<title>User Review</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<p class="pull-right"><a href="/books">Home</a> | <a href="/reviews">Add book and Review</a> | <a href="/signins/logout">Logout</a> </p>
		<div class="userinfo">
			<h1>User Alias: <?= $results['alias'] ?></h1>
			<h2>Name: <?= $results['name'] ?></h2>
			<h2>Email: <?= $results['email'] ?></h2>
			<h3>Total Reviews: 3</h3>
		</div>
		<div class="posted">
			<h2>Posted Reviews on the following books</h2>
			<h3><a href="">Divergent</a></h3>
			<h3><a href="">The Life of Pie</a></h3>
			<h3><a href="">The Hunger Games</a></h3>
		</div>
	</div>
</body>
</html>