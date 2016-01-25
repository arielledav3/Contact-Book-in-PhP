<html>
<head>
<title>Forgot Password</title>
<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
<style>
	body{padding: 2cm 4cm 3cm 4cm;}
</style>
</head>
<body class="form-horizontal text-center lead">
<h1><?php echo lang('forgot_password_heading');?></h1>
<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/forgot_password");?>


      	<label for="email" class="col-sm-3 control-label"><?php echo sprintf(lang('forgot_password_email_label'), $identity_label);?></label>
      	<div class="row">
    	<div class="form-group">
      	<div class="col-sm-6"><?php echo form_input($email,NULL,'class="form-control"');?></div>
      </div>
      </div>

      <p><?php echo form_submit('submit', lang('forgot_password_submit_btn'),'class="btn btn-primary"');?></p>

<?php echo form_close();?>
<script type="text/javascript" src="<?php echo base_url("assets/js/jQuery-1.10.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
</body>
</html>