<h2>Categories</h2>

<ul class="list-group">
	<?php foreach($categories as $category): ?>
		<li class="clist-group-item">
			<a href="<?php echo site_url('/categories/posts/'.$category["id"]) ?>">
			<?php echo $category["name"]; ?>
		</a>
		</li>
	<?php endforeach; ?>
</ul>
