<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.3.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
<style>
	body{padding: 2cm 4cm 3cm 4cm;
	 	 background-image: url("<?php echo base_url('assets/images/quiz.png'); ?>");
	 	 color: white;
	 	 }
</style>
</head>
<body style="text-align:center">
<div class="container text-center" style="width:500; height:300;">
<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login",array('class' => 'form-signin'));?>
<div class="control-group">
    <div class="form-group">
    <div class="row">
    <?php echo form_label(lang('login_identity_label'), 'identity',array('class' => 'col-sm-4 control-label'));?>
    <div class="col-sm-7"><?php echo form_input($identity,NULL,'class="form-control"');?></div>
    </div>
	</div>
    

  <div class="form-group">
  	<div class="row">
    <?php echo form_label(lang('login_password_label'), 'password',array('class' => 'col-sm-4 control-label'));?>
    <div class="col-sm-7"><?php echo form_input($password,NULL,'class="form-control"');?></div>
    </div>
  </div>

  <div class="form-group">
    <?php echo lang('login_remember_label', 'remember');?>
    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
 </div>
 
  <div class="form-group">
  <div class="col-sm-12"><?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-primary btn-lg btn-block"');?></div>
  </div>
  
</div>


<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p><br>
<a href="<?= site_url('auth/create_user') ?>">First Time? Register Here!</a>
</div>

<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>