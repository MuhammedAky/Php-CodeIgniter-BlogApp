<html>
	<head>
		<title>ciBlog</title>
		<!-- CSS only -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?php echo base_url(); ?>">ciBLog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
					</li class="nav-item">
					<li>
						<a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
					</li>
					<li>
						<a class="nav-link" href="<?php echo base_url(); ?>categories">Categories</a>
					</li>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a class="nav-link" href="<?php echo base_url(); ?>users/register">Register</a>
						</li>
						<li>
							<a class="nav-link" href="<?php echo base_url(); ?>posts/create">Create Post</a>
						</li>
						<li>
							<a class="nav-link" href="<?php echo base_url(); ?>categories/create">Create Category</a>
						</li>
					</ul>
			</ul>
			</div>
		</div>
		</nav>

	<div class="container">
		<!-- Flash messages -->
		<?php if($this->session->flashdata("user_registered")): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata("user_registered").'</p>'; ?>

		<?php endif; ?>
		<?php if($this->session->flashdata("post_created")): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata("post_created").'</p>'; ?>

		<?php endif; ?>
		<?php if($this->session->flashdata("post_updated")): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata("post_updated").'</p>'; ?>

		<?php endif; ?>
		<?php if($this->session->flashdata("category_created")): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata("category_created").'</p>'; ?>
		<?php endif; ?>
		<?php if($this->session->flashdata("post_deleted")): ?>
			<?php echo '<p class="alert alert-success">'.$this->session->flashdata("post_deleted").'</p>'; ?>
		<?php endif; ?>
