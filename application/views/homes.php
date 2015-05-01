<html>
<head>
	<title>Books Home</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<style type="text/css">
		.reviews {

		}
	</style>
</head>
<body>

	<div class="container">
		<h1>Welcome, <?= $results["alias"] ?></h1>
		<p class="pull-right"><a href="/reviews">Add book and review</a> | <a href="/signins/logout">Logout</a></p>
		<h2>Recent Book Reviews:</h2>
		<div class="books row">
			<div class="book col-md-6 ">
				<?php 
				foreach ($reviews as $review) { ?>
				<div class='well'>
					<h4><a href=""><?= $review['book_name'] ?></a></h4>
					<p>Rating:<?= $review['book_rating'] ?></p>
					<p><a href=""><?= $review['reviewer_name'] ?></a> says: <?= $review['review'] ?></p>
					<p>Posted on <?= $review['date'] ?></p>
				</div>
				<?php } ?>
				<!-- </div> -->
			</div>
			<!-- .row -->
			
			<div class="other col-md-6 well">
				<h2>Other books with reivews</h2>
				<div class="reviews">
					<p>Harry Potter: The sorcerer's stone</p>
					<p>The Hunger games</p>
					<p>The life of pie</p>
					<p>The Scrap book</p>
					<p>Frozen</p>
					<p>Like Mike</p>
				</div>
		</div>

		</div>
		<!-- .row -->
	</div>
</body>
</html>