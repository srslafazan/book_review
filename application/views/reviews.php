<html>
<head>
	<title>Add Book</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<p class="pull-right"><a href="/reviews/home">Home</a> | <a href="/signins/logout">Logout</a></p>
		<h1>Add a new book title and a review:</h1>
		<form action="/reviews/add_book_reviews" method="POST">
			<p><b>Book Title:</b> <input type="text" name="name"></p>
			<p><b>Author:</b></p>
			<p>Choose from the list: 
				<select>
<?php 
				foreach ($display_authors as $display_author) { ?>
					<option><?= $display_author['author']; ?></option>					
<?php   }   ?>
				</select>
			</p>
			<p>Or add a new author: <input type="text" name="author"></p>
			<input type="text" name="review">
			<select name='rating'>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>
			<input type="submit" value="Add book and review" class="btn btn-success">
		</form>
	</div>
</body>
</html>