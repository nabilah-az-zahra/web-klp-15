<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="articleempty">
			<h1 class="articleemptytitle">Article is Empty</h1>
			<p class="articleemptydesc">No Article to show. Please create new article.</p>

			<div class="articleemptybtn">
				<a href="<?= site_url('admin/post/new') ?>">+ Create New Article</a>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>
</body>

</html>