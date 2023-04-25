<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>HYD</title>
	<script src="<?php echo getSiteAddress(); ?>/script.js"></script>
	<link rel="stylesheet" href="<?php echo getSiteAddress(); ?>/style.css">
</head>
<body>
	<h3>Get last 35 posts of a given category</h3>
	<div class="buttons">
		<button class="btn getPosts" data-category="1">Get posts from category 1</button>
		<button class="btn getPosts" data-category="2">Get posts from category 2</button>
		<button class="btn getPosts" data-category="3">Get posts from category 3</button>
		<button class="btn getPosts" data-category="4">Get posts from category 4</button>
		<button class="btn getPosts" data-category="5">Get posts from category 5</button>
		<button class="btn getPosts" data-category="6">Get posts from category 6</button>
		<button class="btn getPosts" data-category="7">Get posts from category 7</button>
		<button class="btn getPosts" data-category="8">Get posts from category 8</button>
		<button class="btn getPosts" data-category="9">Get posts from category 9</button>
	</div>
	<div id="posts"></div>
</body>
</html>