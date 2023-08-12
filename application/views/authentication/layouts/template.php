<!DOCTYPE html>
<html lang="en">

<head>
	<base href="../">
	<title><?php echo $title ?></title>
	<!-- meta -->
	<?php require_once('_meta.php'); ?>

	<!-- css -->
	<?php require_once('_css.php'); ?>
	<!-- ... (rest of the head content) ... -->
</head>

<body style="background-image: url(<?PHP echo base_url(); ?>assets/media/patterns/header-bg.png)" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled">
	<!-- ... (rest of the body content) ... -->
	<div class="wrapper d-flex align-items-center justify-content-center">
		<!-- Modified code to center the login form -->
		<?php echo $contents; ?>
		<!-- End of modified code -->
		<!-- js -->

		<?php require_once('_js.php'); ?>
		<!-- ... (rest of the body content) ... -->
	</div>

	<div class="box-header">
		<h3 class="box-title">User Login</h3>
	</div>
	<div class="box-body">
		<b>Username</b> : admin (administrator) <br>
		<b>Username</b> : member (member)<br>
		<b>Password</b> : password
	</div>

</body>

</html>