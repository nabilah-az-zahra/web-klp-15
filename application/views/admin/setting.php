<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
	<main class="main">
		<?php $this->load->view('admin/_partials/side_nav.php') ?>

		<div class="settings">
			<h1 class="settingstitle">Settings</h1>

			<div class="settingsavatarcard">
				<div class="settingsavatarcard-header">
					<b>Avatar</b>
					<div class="settingsavataroption">
						<a href="<?= site_url('admin/setting/remove_avatar') ?>" class="removeavatar">Remove Avatar</a>
						<a href="<?= site_url('admin/setting/upload_avatar') ?>" class="changeavatar">Change Avatar</a>
					</div>
				</div>
				<div class="settingsavatarcard-body">
					<?php
					$avatar = $current_user->avatar ?
						base_url('upload/avatar/' . $current_user->avatar)
						: get_gravatar($current_user->email)
					?>
					<img src="<?= $avatar ?>" alt="<?= htmlentities($current_user->name, TRUE) ?>" height="80" width="80">
				</div>
			</div>
			<div class="settingscard">
				<div class="settingscard-header">
					<b>Profile Settings</b>
					<a href="<?= site_url('admin/setting/edit_profile') ?>" class="editprofile">Edit Profile</a>
				</div>
				<div class="settingscard-body">
					Name: <span class="text-gray"><?= html_escape($current_user->name) ?></span>
					<br>
					Email: <span class="text-gray"><?= html_escape($current_user->email) ?></span>
				</div>
			</div>
			<div class="settingscard">
				<div class="settingscard-header">
					<b>Security & Password</b>
					<a href="<?= site_url('admin/setting/edit_password') ?>" class="editpassword">Edit Password</a>
				</div>
				<div class="settingscard-body">
					Your Password: <span class="text-gray">******</span>
					<br>
					Last Changed: <span class="text-gray"><?= $current_user->password_updated_at ?></span>
				</div>
			</div>

			<?php $this->load->view('admin/_partials/footer.php') ?>
		</div>
	</main>


	<?php if ($this->session->flashdata('message')) : ?>
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
		<script>
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})

			Toast.fire({
				icon: 'success',
				title: '<?= $this->session->flashdata('message') ?>'
			})
		</script>
	<?php endif ?>
</body>

</html>