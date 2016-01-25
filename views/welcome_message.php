<?php include_once('header.php'); ?>
	<div class="container theme-showcase" role="main">
		<div class="jumbotron">
			<h1>Home</h1>
			<br>
			<p class="text-capitalize"><i>Welcome <b><?php echo $user_email  ?></b></i></p><br>
			<a href="<?= site_url('auth/change_password') ?>" class="btn btn-primary glyphicon glyphicon-lock"> Change-Password</a>
		</div>
    </div>
    <br>


<?php include_once('footer.php'); ?>
