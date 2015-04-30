<html>
<head>
	<title>Add Book</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<p class="pull-right"><a href="">Home</a> | <a href="">Logout</a></p>
		<h1>Add a new book title and a review:</h1>
		<form action="/reviews/add_book" method="POST"></form>
			<p><b>Book Title:</b> <input type="text" name=""></p>
			<p><b>Author:</b></p>
			<p>Choose from the list: 
				<select>
					<option>Stephen King</option>
					<option>J.K. Rowling</option>
					<option>Spike Lee</option>
				</select>
			</p>
			<p>Or add a new author: <input type="text"></p>
			<p><b>Review</b> <textarea></textarea></p>
			<p><b>Rating</b>
				<select>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</p>
			<input type="submit" value="Add book and review" class="btn btn-success">
		</form>
	</div>
</body>
</html>