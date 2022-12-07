<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<div class="container">
		<h1 class="contacttitle">Contact Us</h1>
		<p class="contactdesc">Hubungi kami melalui form berikut</p>
		<form action="" method="post" style="max-width: 600px;">
			<div class="contactsec">
				<label for="name">Name<span>*</span></label>
				<input type="text" name="name" class="<?= form_error('name') ? 'invalid' : '' ?>" placeholder="your name" value="<?= set_value('name') ?>" required maxlength="32" />
				<div class="invalid-feedback"><?= form_error('name') ?></div>
			</div>
			<div class="contactsec">
				<label for="email">Email<span>*</span></label>
				<input type="email" name="email" class="<?= form_error('email') ? 'invalid' : '' ?>" placeholder="your email address" value="<?= set_value('email') ?>" required />
				<div class="invalid-feedback"><?= form_error('email') ?></div>
			</div>
			<div class="contactsec">
				<label for="message">Message<span>*<span></label><br>
				<textarea name="message" cols="30" class="<?= form_error('message') ? 'invalid' : '' ?>" rows="5" placeholder="write your message" required><?= set_value('message') ?></textarea>
				<div class="invalid-feedback"><?= form_error('message') ?></div>
			</div>

			<div class="contactoption">
				<input type="submit" class="contactkirimbtn" value="Kirim">
				<input type="reset" class="contactresetbtn" value="Reset">
			</div>
		</form>
	</div>

	<?php $this->load->view('_partials/footer.php'); ?>
</body>

</html>