<html>
<head>
	<title>Books Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		div.reviews {
			width: 400px;
		    height: 150px;
		    overflow: scroll;
		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Welcome, <?= $results["alias"] ?></h1>
		<p class="pull-right"><a href="/reviews/index">Add book and review</a> | <a href="/signins/logout">Logout</a></p>
		<h2>Recent Book Reviews:</h2>
		<div class="books row">
			<div class="book col-md-6 ">
				<?php 
				foreach ($reviews as $review) { ?>
				<div class='well'>
					<h4><a href="/books/index"><?= $review['book_name'] ?></a></h4>
					<p>Rating:<?= $review['book_rating'] ?></p>
					<p><a href="/users/index"><?= $review['reviewer_name'] ?></a> says: <?= $review['review'] ?></p>
					<p>Posted on <?= $review['date'] ?></p>
				</div>
				<?php } ?>
				<!-- </div> -->
			</div>
			<!-- .row -->
			
			<div class="other col-md-6 well">
				<h2>Other books with reviews</h2>
				<div class="reviews">
<?php
				foreach ($display_books as $display_book) { ?>
					<a href="/books/index"><?= $display_book['name'] ?></a><br>
<?php	} ?>
			</div>
		</div>

		</div>
		<!-- .row -->
	</div>
</body>
</html>