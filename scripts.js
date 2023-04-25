var button = document.querySelector('.btn');

btn.addEventListener('click', function() {
	var category = this.dataset.category;
	var posts = document.querySelector('#posts');
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'https://example.com/admin-ajax.php', true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	xhr.onload = function () {
		posts.append(xhr.responseText);
	};
	xhr.send('action=get_posts_by_category&category_id=' . category);
});